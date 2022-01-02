<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fbexperiencecard extends Model
{
    protected $fillable = [
        "url_image",
        "title",
        "description",
    ];

    public function mealplanindividuals()
    {
        return $this->hasMany(Mealplanindividual::class);
    }

    public function moreinfoitems()
    {
        return $this->hasMany(Moreinfoitem::class);
    }
}
