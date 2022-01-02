<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informativehomesection extends Model
{
    protected $fillable = [
        "title",
        "slogan",
        "list_information",
        "description",
        "footer",
        "button_english_href",
        "button_spanish_href",
    ];

    public function listoptionssectionhomes()
    {
        return $this->hasMany(Listoptionssectionhome::class);
    }
}
