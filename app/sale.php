<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sale extends Model
{
    protected $table = 'sales';
    protected $fillable = [
        'client_id',
        'user_id',
        'total'
    ];


    
public function client()
{
    return $this->belongsto(Client::class, 'client_id', 'id');
}

public function user()
{
    return $this->belongsto(User::class, 'user_id', 'id');
}

public function products()
{
    return $this->belognsToMany(Prduct::class);  //product_sale
}

}
