<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manual extends Model
{
    protected $table = 'manuals';
    protected $fillable = [
        'modelo',
        'año',
        'product_id',
        'file'
    ];

    public function product()
    {
        return $this->hasMany(Manual::class, 'product_id', 'id');
    }
}
