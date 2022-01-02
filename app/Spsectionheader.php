<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spsectionheader extends Model
{
    protected $fillable = [
        "title",
        "description",
        "btn_href_pdf",
    ];
}
