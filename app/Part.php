<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Part extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'product_id',
        'codigo',
        'caballaje',
        'stock'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function product()
    {
        return $this->belongsToMany(Product::class);
    }
}
