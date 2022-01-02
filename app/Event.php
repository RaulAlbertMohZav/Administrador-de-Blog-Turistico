<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        "title",
        "description",
        "url_image",
        "footer",
        "btn_show",
        "btn_text",
        "btn_href",
    ];
}
