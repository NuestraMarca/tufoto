<?php namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model {

	static public $pathGalleries = 'images/galleries/';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['title', 'url', 'category_id'];

	public $timestamps = true;
	public $increments = true;

	public static function findOrFailByUrl($url)
	{
		$gallery = self::whereUrl($url)->firstOrFail();
		return $gallery;
	}

	static public function getSearch($search)
	{
		return self::where('title', 'like', '%'. $search . '%')->get();
	}

	public function getPathAttribute()
	{
		return self::$pathGalleries . $this->category->url . '/' . $this->folder;
	}

	public function getCoverImageAttribute()
	{
		if( ! is_null($this->cover) && ! empty($this->cover))
		{
			return $this->path . '/Miniaturas/'. $this->cover .'.jpg';
		}

		$smalls = glob($this->path . '/Miniaturas/*.*');

		return reset($smalls);
	}

	public function getCompleteUrlAttribute()
	{
		return '/galerias/' . $this->category->url . '/' . $this->url;
	}

	public function getPhotosAttribute()
	{
		return glob($this->path . '/*.jpg');
	}

	public function getTitleOrTagAttribute()
	{
		if($this->tag)
		{
			return $this->tag;
		}

		return $this->category->title_singular;
	}

	public function category()
    {
        return $this->belongsTo('App\Entities\Category', 'category_id', 'id');
    }
}
