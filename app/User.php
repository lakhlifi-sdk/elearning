<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','role','password','email','avatar','phone','cin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function __toString(){
        return ( $this->id ) ? $this->name : "";
    }

    public function __toHtml(){
        return ( $this->id ) ? '<a href="'.route('user_edit',$this->id).'" target="_blank">'.$this->name.'</a>' : "";
    }
    
    public function etudient(){
        return $this->hasOne('App\Etudient');
    }
    public function prof(){
        return $this->hasOne('App\Prof');
    }

    public function groupes(){
        return $this->belongsToMany('App\Groupe','usergroupes','user_id');
    }

    public function picture(){
        return $this->belongsTo('App\Media','avatar','id');
    }

    public function avatar(){
        return  '<span class="avatar">' . ($this->picture ? $this->picture->reference : substr($this->name, 0, 2) ).'</span>';
    }

    public function roles(){
        $roles = [];
        $roles[] = $this->role;

        foreach ($this->groupes as $groupe) {
            foreach (explode(',', $groupe->roles) as $role) {
                array_push($roles, strtolower($role) );
            }
        }
        return $roles;
    }
    
    public function isGranted($role){

        if($this->role == "ADMIN")
            return true;

        $roles = $this->roles();
        
        if( in_array( strtolower($role), $roles) )
            return true;


        return false;
    }
    
    /*public function isGranted($role){
        if( $this->role == $role )
            return true;
        
        return false;
    }*/

    public function getname(){
        return $this->name;
    }

    public function getrole(){
        return $this->role;
    }

    public function getemail(){
        return $this->email;
    }
    public function getphone(){
        return $this->phone;
    }

    public function getcin(){
        return $this->cin;
    }
    public function getcne(){
        if($this->etudient)
            return $this->etudient->cne;
        if($this->prof)
            return $this->prof->matricule;
    }

    public function getavatar(){
        return $this->picture ? $this->picture->picture() : '<span class="avatar">'.substr($this->name, 0, 2).'</span>';
    }
}
