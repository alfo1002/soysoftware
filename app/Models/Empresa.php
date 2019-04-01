<?php

namespace isoft\Models;
use isoft\User;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table='empresa';

    protected $hidden = [
        'estado', 'user_id',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
}
