<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{

    use HasFactory;

    //Relacion de uno a muchos
    //Un pabellon puede tener muchas cárceles
    public function jails(){
        return $this->hasMany(Jail::class);
    }
    //Relacion de muchos a muchos
    //Un pabellón puede tener muchos usuarios
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }


    //Relacion polimorfica uno a uno
    //un pabellon pueden tener una imagen
    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }
}
