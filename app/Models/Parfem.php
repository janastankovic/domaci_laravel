<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Parfimerija;
use App\Models\Korpa;

class Parfem extends Model
{
    use HasFactory;

    
    public function parfimerija(){
        return $this->belongsTo(Parfimerija::class);
    }

    //parfem je u korpi nekog korisnika
    public function korpa(){
        return $this->belongsTo(Korpa::class);
    }

}
