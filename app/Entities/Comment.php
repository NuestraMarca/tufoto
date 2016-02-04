<?php

namespace App\Entities;

use \Lanz\Commentable\Comment as Lanz;
use Carbon\Carbon;

class Comment extends Lanz
{
	protected function getCreatedAtHummansAttribute()
    {
        Carbon::setLocale('es');
        return ucfirst($this->created_at->diffForHumans());
    }

	/**
     * Comment belongs to a client.
     *
     * @return Client
     */
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
