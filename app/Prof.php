<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prof extends User
{
    protected $fillable = [
        'matricule','user_id'
    ];

    public function __toString(){
        return ( $this->id ) ? $this->user->__toString() : "";
    }

    public function __toHtml(){
        return ( $this->id ) ? '<a href="'.route('prof',$this->id).'" target="_blank">'.$this->user.'</a>' : "";
    }


    public function scopeUserdata($query)
    {
        global $filter;
        $filter = request('filter');

        if( 
            ( $filter["name"] and $filter["name"]['value'] ) || 
            ( $filter["cin"] and $filter["cin"]['value'] ) || 
            ( $filter["email"] and $filter["email"]['value'] ) || 
            ( $filter["phone"] and $filter["phone"]['value'] )
        ){

            return $query->whereHas('user', function ($query) {
                global $filter;
                $where = [];


                if( $filter["name"] and $filter["name"]['value'] )
                    $where[] = [ 
                            "name" 
                            ,'like',
                            "%".$filter["name"]['value'] ."%"
                        ];

                if( $filter["cin"] and $filter["cin"]['value'] )
                    $where[] = [ 
                            "cin" 
                            ,'like',
                            "%".$filter["cin"]['value']."%"
                        ];

                if( $filter["email"] and $filter["email"]['value'] )
                    $where[] = [ 
                            "email" 
                            ,'like',
                            "%".$filter["email"]['value']."%"
                        ];

                if( $filter["phone"] and $filter["phone"]['value'] )
                    $where[] = [ 
                            "phone" 
                            ,'like',
                            "%".$filter["phone"]['value']."%"
                        ];

                $query->where($where);
            });
        }
    }
    
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function prof_modules(){
        return $this->hasMany('App\Prof_module');
    }

    public function modules(){
        return $this->belongsToMany('App\Module','prof_modules');
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

    public function getavatarfulllink(){
        return $this->user->getavatarfulllink();
    }
}
