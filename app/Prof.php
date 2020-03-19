<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prof extends User
{
    protected $fillable = [
        'matricule','user_id'
    ];

    
    public function user(){
        return $this->belongsTo('App\User');
    }


    public function getmatricule(){
        return $this->matricule;
    }
    public function getname(){
        return $this->user->getname();
    }

    public function getrole(){
        return $this->user->getrole();
    }

    public function getemail(){
        return $this->user->getemail();
    }
    public function getphone(){
        return $this->user->getphone();
    }

    public function getcin(){
        return $this->user->getcin();
    }

    public function getavatar(){
        return $this->user->getavatar();
    }
}
