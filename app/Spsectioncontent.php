<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spsectioncontent extends Model
{
    protected $fillable = [
        "title",
        "url_image",
        "description",
        "btn_show",
        "btn_text",
        "btn_href",
    ];

    public function spoptionssectioncontentactivities()
    {
        return $this->hasMany(Spoptionssectioncontentactivitie::class);
    }
}
