<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSizes extends Model
{
    const CREATED_AT = null;
    const UPDATED_AT = 'last_update';

    protected $fillable = ['product_id', 'name', 'price'];

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
