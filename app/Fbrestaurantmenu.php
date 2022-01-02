<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fbrestaurantmenu extends Model
{
    protected $fillable = [
        "text",
        "url_pdf",
        "fbrestaurant_id",
    ];

    public function restaurant()
    {
        return $this->belongsTo(Fbrestaurant::class);
    }
}
