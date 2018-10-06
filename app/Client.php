<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $fillable = [
        'n_client',
        'name',
        'lastname',
        'dependence',
        'email',
        'phone',
    ];

public function sales()
{
    return $this->hasMany(Sale::class, 'client_id', 'id');
}

}
