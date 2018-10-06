<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'category_id', 'product', 'model', 'serie', 'measure', 'price'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function category()
    {
        return $this->belongsto(Category::class);
    }

    public function parts()
    {
        return $this->hasMany(Part::class);
    }

    public function manuals()
    {
        return $this->hasMany(Manual::class);
    }
    
    public function sales()
    {
        return $this->belongsToMany(Sale::class); //product_sale
    }
    
}
