<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prof extends Model
{
    protected $fillable = [
        'matricule','user_id'
    ];

    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
