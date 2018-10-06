<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    protected $table = 'parts';
    protected $fillable = [
        'product_id',
        'codigo',
        'caballaje',
        'stock'
    ];

    public function product()
    {
        return $this->belongsto(Product::class, 'product_id', 'id');
    }
}
