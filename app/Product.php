<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'category_id',
        'descripcion',
        'modelo',
        'serie',
        'medida',
        'precio'
    ];

    public function category()
    {
        return $this->belongsto(Category::class, 'category_id', 'id');
    }

    public function parts()
    {
        return $this->hasMany(Part::class, 'product_id', 'id');
    }

    public function manuals()
    {
        return $this->hasMany(Manual::class, 'product_id', 'id');
    }
    
    public function sales()
    {
        return $this->belongsToMany(Sale::class); //product_sale
    }
    
}
