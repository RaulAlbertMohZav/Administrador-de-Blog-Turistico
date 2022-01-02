<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spoptionssectioncontentactivitie extends Model
{
    protected $fillable = [
        "text",
        "pdf_href",
        "spsectioncontent_id",
    ];

    public function spsectioncontent()
    {
        return $this->belongsTo(Spsectioncontent::class);
    }
}
