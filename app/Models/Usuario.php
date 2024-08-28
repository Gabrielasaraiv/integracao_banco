<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    // criar características do usuário
    //protected - proteger
    protected $fillable = [ // vai receber um array
        'nome' , 
        'email' ,
        'password'
    ];
}
