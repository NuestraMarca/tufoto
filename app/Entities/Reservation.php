<?php namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'date', 'comments', 'cel'];

	public $timestamps = true;
	public $increments = true;

	
}