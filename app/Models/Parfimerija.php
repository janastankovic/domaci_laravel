<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Parfem;

class Parfimerija extends Model
{
    use HasFactory;

    //vrati sve parfeme u parfimeriji
    public function parfemi(){
        return $this->hasMany(Parfem::class);
    }
}
