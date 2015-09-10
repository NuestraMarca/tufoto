<?php namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	static public $path = 'images/galleries/';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['title', 'url'];

	public $timestamps = true;
	public $increments = true;

	public static function findOrFailByUrl($url)
	{
		$category = self::whereUrl($url)->firstOrFail();
		return $category;
	}

	public function findOrFailGalleryByUrl($url)
	{
		$gallery = $this->galleries()->whereUrl($url)->first();

		if(is_null($gallery))
		{
			\App::abort('404');
		}

		return $gallery;
	}

	public function getCoverImageAttribute()
	{
		return self::$path . $this->url . '/cover.jpg';
	}

	public function getCompleteUrlAttribute()
	{
		return '/galerias/' . $this->url;
	}

	public function getPhotosAttribute()
	{
		return glob(self::$path . $this->id . '/*.*');
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
}
