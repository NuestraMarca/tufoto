<?php

namespace App\Entities;

use \Lanz\Commentable\Comment as Lanz;
use Carbon\Carbon;

class Comment extends Lanz
{
    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['created_at_hummans', 'prueba'];

    protected $visible = ['created_at_hummans', 'prueba', 'body'];

    //protected $orderColumn = 'rgt';
    protected $orderType = 'desc';

    public function getCreatedAtHummansAttribute()
    {
        Carbon::setLocale('es');
        return ucfirst($this->created_at->diffForHumans());
    }

    public function getPruebaAttribute()
    {
        return 'prueba';
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

    /**
    * Static query scope. Returns a query scope with all root nodes.
    *
    * @return \Illuminate\Database\Query\Builder
    */
    public static function roots() {
    $instance = new static;

    return $instance->newQuery()
                    ->whereNull($instance->getParentColumnName())
                    ->orderBy($instance->getQualifiedOrderColumnName(), $instance->orderType);
    }
}
