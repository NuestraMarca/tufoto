<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class ProviderType extends Model
{
	protected $fillable = ['name', 'description'];
	
    public function providers()
    {
        return $this->hasMany('App\Entities\Provider', 'type_id', 'id');
    }
}
