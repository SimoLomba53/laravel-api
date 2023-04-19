<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class Proj extends Model
{
    use HasFactory;

    protected $fillable=["type_id","title","description","image"];
    public $timestamps = false;

    // RELATIONS

    public function technologies(){
        return $this->belongsToMany(Technology::class);
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }

    //public function user(){
        //return $this->belongsTo(User::class);
    //}
}
