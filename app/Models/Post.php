<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Relacion Uno a Muchos (Inversa) con User
    
    public function user(){
        return $this->belongsTo('App\Models\user');
    }

    //Relacion Uno a Muchos (Inversa) con Categoria
    public function categoria(){
        return $this->belongsTo('App\Models\categoria');
    }


}
