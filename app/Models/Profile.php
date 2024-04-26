<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public function user()
    {
       // return $this->hasOne(User::class, 'foreign_key', 'local_key');
       return $this->belongsTo('App\Models\User');
    }

}
