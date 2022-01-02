<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fbrestaurantambience extends Model
{
    protected $fillable = [
        "text",
        "fbrestaurant_id",
    ];

    public function restaurant()
    {
        return $this->belongsTo(Fbrestaurant::class);
    }
}
