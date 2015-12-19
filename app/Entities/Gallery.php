<?php namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use File, Storage, Image;

class Gallery extends Model {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['title', 'description', 'date', 'tag'];

	public $timestamps = true;
	public $increments = true;

	public static function findOrFailByUrl($url)
	{
		$find = self::all()->where('title_url_format', $url)->first();

		if(is_null($find)) {
			abort('404');
		}

		return $find;
	}

	public static function getSearch($search)
	{
		return self::where('title', 'like', '%'. $search . '%')->get();
	}

	public static function cleanText($text)
	{
		$no_permitidas	= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");
		$permitidas 	= array ("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E");
		return str_replace($no_permitidas, $permitidas ,$text);
	}

	public function getTitleDirectoryFormatAttribute()
	{
		return strtolower(self::cleanText(str_replace(' ', '_', $this->title)));
	}

	public function getTitleUrlFormatAttribute()
	{
		return strtolower(self::cleanText(str_replace(' ', '-', $this->title)));
	}

	public function getDirectoryAttribute()
	{
		if($this->tag){
			return $this->category->directory . '/' . strtolower($this->tag) . '_' . $this->title_directory_format . '/'; 
		}

		return $this->category->directory . '/' . $this->title_directory_format . '/';
	}

	public function getSmallDirectoryAttribute()
	{
		return $this->directory . 'smalls/';
	}

	public function getSmallsAttribute()
	{
		return glob($this->small_directory . '*.jpg');
	}

	public function getCoverImageAttribute()
	{
		if( ! is_null($this->cover) && ! empty($this->cover)) {
			return $this->small_directory . $this->cover;
		}
		else if(! empty($this->smalls)){
			return '/' . $this->smalls[0];
		}
		else if(! empty($this->photos)){
			return '/' . $this->photos[0];		
		}

		return $this->category->cover;
	}

	public function getCompleteUrlAttribute()
	{
		return strtolower($this->category->complete_url . '/' . $this->title_url_format);
	}

	public function getPhotosAttribute()
	{
		return glob($this->directory . '*.jpg');
	}

	public function getTitleOrTagAttribute()
	{
		if($this->tag){
			return $this->tag;
		}

		return $this->category->title_singular;
	}

	public function category()
    {
        return $this->belongsTo('App\Entities\Category', 'category_id', 'id');
    }

    public function deletePhoto($photoName)
    {
    	return Storage::delete($this->directory . $photoName);
    }

    public function getPhoto($photoName)
    {
    	return $this->directory . $photoName;
    }

    public function addPhoto($file)
    {
    	$photoName 		= strtolower(str_replace(' ', '_', $file->getClientOriginalName())); 
    	$photoUrl  		= $this->directory . $photoName; 
    	
    	Storage::disk('local')->put($photoUrl,  File::get($file));
    	$this->findOrCreateSmallDirectory();
    	$this->resizePhoto($photoName);

    	return $this->photoUrl;
    }

    public function findOrCreateSmallDirectory()
    {
    	if(empty(Storage::files($this->small_directory))) {
			$this->makeSmallDirectory();
		}

		return $this->small_directory;
    }
    

    public function resizePhoto($photoName)
    {
    	$photoUrl  		= $this->directory . $photoName; 
    	$photoSmallUrl  = $this->small_directory . $photoName; 

    	Image::make($photoUrl)->resize(600, 400)->save($photoSmallUrl, 80);
    }

    public function generateSmalls()
    {
    	$this->findOrCreateSmallDirectory();
    	foreach ($this->photos as $photo) {
    		$photoName 	=  explode('/', $photo)[4]; 
    		$this->resizePhoto($photoName);
    	}
    }

    public function makeDirectory()
    {
    	return Storage::makeDirectory($this->directory);
    }

    public function makeSmallDirectory()
    {
    	Storage::makeDirectory($this->small_directory);
    }
    
        
}
