<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    static public $pathProviders = 'images/providers/';

    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'url', 'type_id'];

	public $timestamps = true;
	public $increments = true;

	public function getPathAttribute()
	{
		return self::$pathProviders . $this->folder;
	}

	public function getPhotosAttribute()
	{
		return glob($this->path . '/*.jpg');
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

	public static function findOrFailByUrl($url)
	{
		return self::whereUrl($url)->firstOrFail();
	}

	public function type()
    {
        return $this->belongsTo(ProviderType::class, 'type_id', 'id');
    }
}
