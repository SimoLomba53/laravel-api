<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    // RELATIONS

    public function projs(){
        return $this->hasMany(Proj::class);
    }
}
