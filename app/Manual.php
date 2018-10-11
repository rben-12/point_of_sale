<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manual extends Model
{
    protected $fillable = [
        'model',
        'year',
        'product_id',
        'file'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
