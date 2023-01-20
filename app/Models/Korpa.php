<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Parfem;

class Korpa extends Model
{
    use HasFactory;

    public function parfemi(){
        return $this->hasMany(Parfem::class);
    }
}
