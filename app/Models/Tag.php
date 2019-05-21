<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    const CREATED_AT = null;
    const UPDATED_AT = 'last_update';

    protected $fillable = ['name'];

    public function products()
    {
        return $this->belongsToMany('App\Models\Product',  'products_tags');
    }
}
