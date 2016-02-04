<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class Client extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'cel'];

     /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['first_letter'];


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

    public function newComment($post_id, $text)
    {
        try{
            $post = Post::findOrFail($post_id);

            $comment = new Comment;
            $comment->body = $text;
            $comment->client_id = $this->id;
            $post->comments()->save($comment);  
            
        } catch (QueryException $e) {
            return false;    
        } catch (ModelNotFoundException $e) {
            return false;
        }

        return $comment;
        
    }

}
