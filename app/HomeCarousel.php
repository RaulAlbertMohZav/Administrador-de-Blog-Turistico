<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeCarousel extends Model
{
    protected $fillable = [
        "url_image",
        "title",
        "href",
    ];
}
