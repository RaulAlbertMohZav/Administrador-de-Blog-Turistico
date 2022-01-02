<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subheader extends Model
{
    protected $fillable = [
        "title",
        "description",
        "bg_image"
    ];
}
