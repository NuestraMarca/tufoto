<?php namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use File, Storage;

class Category extends Model {

	static public $rootDirectory 	= 'images/galleries/';
	static public $rootWebUrl 		= '/galerias/';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['title_singular', 'title_plural', 'description', 'seo_title', 'seo_description'];
	protected $appends 	= ['title_url_format', 'title_directory_format'];

	public $timestamps = true;
	public $increments = true;

	public static function findOrFailByUrl($url)
	{
		$category = self::all()->where('title_url_format', $url)->first();

		if(is_null($category)) {
			abort('404');
		}

		return $category;
	}

	public function findOrFailGalleryByUrl($url)
	{
		$gallery = $this->galleries->where('title_url_format', $url)->first();

		if(is_null($gallery))
		{
			abort('404');
		}

		return $gallery;
	}

	public function getTitleUrlFormatAttribute()
	{
		return strtolower(str_replace(' ', '-', $this->title_plural));
	}

	public function getTitleDirectoryFormatAttribute()
	{
		return strtolower(str_replace(' ', '_', $this->title_plural));
	}

	public function getDirectoryAttribute()
	{
		return self::$rootDirectory . $this->title_directory_format;
	}

	public function getCoverAttribute()
	{
		return  '/' . $this->directory . '/cover.jpg';
	}

	public function getCompleteUrlAttribute()
	{
		return self::$rootWebUrl . $this->title_url_format;
	}

	public function galleries()
    {
        return $this->hasMany('App\Entities\Gallery', 'category_id', 'id');
    }

    public static function getCategoryTitles()
    {
    	$categories = Category::lists('id', 'title_plural');
    	return implode(', ', $categories);
    }

    public function uploadImage($file)
    {
        if ($file) {
            Storage::disk('local')->put($this->cover,  File::get($file));
            return true;
        }

        return false;
    }
}
