<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mealplanindividual extends Model
{
    protected $fillable = [
        "text",
        "item_href",
        "fbexperiencecard_id",
    ];

    public function fbexperiencecard()
    {
        return $this->belongsTo(Fbexperiencecard::class);
    }
}
