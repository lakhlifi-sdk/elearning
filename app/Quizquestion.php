<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quizquestion extends Model
{
    protected $fillable = [
        'contenu','cours_id', 'type', 'reponses'
    ];

    public function __toString(){
        return ( $this->id ) ? "#".$this->id : "";
    }

    public function cours(){
        return $this->belongsTo('App\Cours');
    }

    public function getcontenu(){
        return $this->contenu;
    }

    public function getcours_id(){
        return $this->cours;
    }

    public function gettype(){
        return $this->type;
    }

    public function getreponses(){
        return $this->reponses;
    }

    public function getprof_id(){
        return $this->cours->prof_id;
    }

    public function getmodule_id(){
        return $this->cours->module;
    }

}
