<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citie extends Model
{
    use HasFactory;

    public function province()
    {
        return $this->hasOne(Province::class);
    }

    public function profile()
    {
        return $this->hasMany(Profile::class);
    }
}
