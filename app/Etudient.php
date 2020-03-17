<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudient extends Model
{
    protected $fillable = [
        'cne','user_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
