<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    protected $table = 'cases';

    protected $fillable = [
        "out",
        "work",
        "contact",
        "meet",
        "assist",
        "fivers",
        "mucils",
        "cough",
        "smell",
        "gorge",
        "vomiting",
        "age",
        "weight",
        "tall",
        "pressure",
        "diab",
        "cancer",
        "breathing",
        "renal",
        "liver",
        "pregnant",
        "deasis",
        "bcg",
        "influenza",
        "result","ip"
    ];
}
