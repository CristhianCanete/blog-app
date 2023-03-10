<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Relacion de uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

     public function category(){
        return $this->thisBelongsTo(Category::class);
    }

    //Relacion de uno a muchos
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    //Relacion uno a uno polimorfica
    public function images(){
        return $this->morphOne(Image::class, 'imagiable');
    }
}
