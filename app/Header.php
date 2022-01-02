<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    protected $fillable = [
        "title",
        "bg_image",
    ];
}
