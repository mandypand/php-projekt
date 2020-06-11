<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function reviews(){

        return $this->hasMany(review::class);

    }
}
