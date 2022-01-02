<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fbrestaurant extends Model
{
    protected $fillable = [
        "url_image",
        "title",
        "description",
    ];

    public function fbrestaurantambiences()
    {
        return $this->hasMany(Fbrestaurantambience::class);
    }

    public function fbrestauranthours()
    {
        return $this->hasMany(Fbrestauranthour::class);
    }

    public function fbrestaurantmenus()
    {
        return $this->hasMany(Fbrestaurantmenu::class);
    }
}
