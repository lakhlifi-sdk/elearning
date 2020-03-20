<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    protected $fillable = [
        'titre','contenu','type', 'prof_id','module_id','start','end'
    ];

    public function __toString(){
        return ( $this->id ) ? $this->titre : "";
    }

    public function __toHtml(){
        return ( $this->id ) ? '<a href="'.route('cours',$this->id).'" target="_blank">'.$this->titre.'</a>' : "";
    }

    public function module(){
        return $this->belongsTo('App\Module');
    }

    public function prof(){
        return $this->belongsTo('App\Prof');
    }

    public function questions(){
        return $this->hasMany('App\Cours_question')->where('question_id',NULl);
    }

    public function gettitre(){
        return $this->titre;
    }

    public function gettype(){
        return $this->type;
    }

    public function getcontenu(){
        return $this->contenu;
    }

    public function getprof_id(){
        return $this->prof_id;
    }

    public function getmodule_id(){
        return $this->module;
    }

    public function getstart(){
        return $this->start;
    }

    public function getend(){
        return $this->end;
    }

}
