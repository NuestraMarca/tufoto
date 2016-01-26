<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use File, Storage, Image;

class Provider extends Model
{
    static public $rootDirectory = 'images/providers/';

    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'type_id', 'url', 'tel', 'address', 'links'];

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
		return self::where('name', 'like', '%'. $search . '%')
			->orWhere('url', 'like', '%'. $search . '%')
			->orWhere('address', 'like', '%'. $search . '%')
			->orWhere('links', 'like', '%'. $search . '%')
			->get();
	}

	public function getTitleDirectoryFormatAttribute()
	{
		return strtolower(Gallery::cleanText(str_replace(' ', '_', $this->name)));
	}

	public function getTitleUrlFormatAttribute()
	{
		return strtolower(Gallery::cleanText(str_replace(' ', '-', $this->name)));
	}

	public function getDirectoryAttribute()
	{
		return self::$rootDirectory . $this->title_directory_format . '/';
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
			return '/' . $this->small_directory . $this->cover;
		}
		else if(! empty($this->smalls)){
			return '/' . $this->smalls[0];
		}
		else if(! empty($this->photos)){
			return '/' . $this->photos[0];		
		}

		return '/images/providers.jpg';
	}

	public function getCompleteUrlAttribute()
	{
		return strtolower('/proveedores/' . $this->title_url_format);
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

	public function getAltAttribute()
	{
		return $this->name . ' - ' . $this->type->alt;
	}

	public function getTitleImgAttribute()
	{
		return $this->name . ' - ' . $this->type->alt;
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
    		$photoName 	=  explode('/', $photo)[3]; 
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

	public function type()
    {
        return $this->belongsTo(ProviderType::class, 'type_id', 'id');
    }
}
