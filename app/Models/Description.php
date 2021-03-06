<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    use HasFactory;


    // Asignación Masiva
    protected $guarded = ['id'];


    //Relacion uno a muchos inversa
    public function lesson(){
        return $this->belongsTo('App\Models\Lesson');
    }

    


}
