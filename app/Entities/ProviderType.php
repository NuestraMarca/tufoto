<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class ProviderType extends Model
{
	static public $rootDirectory 	= 'images/proveedores/';
	static public $rootWebUrl 		= '/proveedores/tufoto/';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'description'];
	protected $appends 	= ['title_url_format', 'title_directory_format'];
	
	public static function findOrFailByUrl($url)
	{
		$type = self::all()->where('title_url_format', $url)->first();

		if(is_null($type)) {
			abort('404');
		}

		return $type;
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
		return strtolower(str_replace(' ', '-', $this->name));
	}

	public function getCoverAttribute()
	{
		if($this->providers->count() > 1) {
			$provider = $this->providers->random();
			return $provider->cover_image;
		}
		else if($provider = $this->providers->first()){
			return $provider->cover_image;
		}
		
		return Provider::first()->cover_image;
	}

	public function getAltAttribute()
	{
		return $this->name . ' en Villavicencio para tu Matrimonio (Bodas y Prebodas)';
	}

	public function getTitleImgAttribute()
	{
		return $this->name . ' en Villavicencio para tu Matrimonio (Bodas y Prebodas) que recomendamos en tufoto';
	}

	public function getCompleteUrlAttribute()
	{
		return self::$rootWebUrl . $this->title_url_format;
	}
	
	public static function getCategoryTitles()
    {
    	$types = Category::lists('id', 'name');
    	return implode(', ', $types);
    }

    public function providers()
    {
        return $this->hasMany('App\Entities\Provider', 'type_id', 'id');
    }


}
