<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    // Asignación Masiva
    protected $guarded = ['id'];


    //Relacion uno a uno
    public function description(){
        return $this->hasOne('App\Models\Description');
    }

    //Relacion uno a muchos inversa
    public function section(){
        return $this->belongsTo('App\Models\Section');
    }

    //Relacion uno a muchos inversa
    public function platform(){
        return $this->belongsTo('App\Models\Platform');
    }

    //Relacion muchos a muchos
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }


    //Relacion uno a uno polimorfica

    public function resource(){
        return $this->morphOne('App\Models\Resource', 'resourceable');
    }


    //Relacion uno a muchos polimorfica

    public function comments(){
        return $this->morphMany('App\Models\Comment', 'commentable');
    }


    public function reactions(){
        return $this->morphMany('App\Models\Reaction', 'reactionable');
    }

    
}
