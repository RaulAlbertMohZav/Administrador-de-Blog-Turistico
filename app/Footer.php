<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $fillable = [
        "slogan",
        "author",
        "bg_footer",
        "btn_facebook_href",
        "btn_instagram_href",
        "btn_pinterest_href",
    ];
}
