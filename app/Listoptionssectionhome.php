<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listoptionssectionhome extends Model
{
    protected $fillable = [
        "text",
        "informativehomesection_id",
    ];

    public function informativehomesection()
    {
        return $this->belongsTo(Informativehomesection::class);
    }
}
