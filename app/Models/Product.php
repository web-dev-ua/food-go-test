<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const CREATED_AT = null;
    const UPDATED_AT = 'last_update';

    protected $fillable = ['foreign_id', 'client_id', 'name', 'descr', 'price', 'popular', 'category_id'];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function sizes()
    {
        return $this->hasMany('App\Models\ProductSizes');
    }

    public function additives()
    {
        return $this->belongsToMany('App\Models\Additive', 'products_additives');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'products_tags');
    }
}
