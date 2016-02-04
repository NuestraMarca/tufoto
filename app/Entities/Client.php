<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'cel'];

	public $timestamps = true;
	public $increments = true;

	public function getFirstLetterAttribute()
	{
		return ucfirst(substr($this->name, 0, 1));
	}

	public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
