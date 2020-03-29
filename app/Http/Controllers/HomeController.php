<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module;
use App\Session;
use App\User;
use App\Cours;
use App\Prof ;
use App\Etudient ;
use App\Filier ;
use App\Question ;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.home');
    }

    public function admin()

    {
        $count_cours = Cours::all()->count();
        $count_users = Prof::all()->count();
        $count_etudients = Etudient::all()->count();
        $count_modules = Module::all()->count();
        $count_filiers = Filier::all()->count();
        $count_questions=Question::all()->count();
        $count_prof=Prof::all()->count();
        return view('home', 
            [
                'count_cours'=>$count_cours,
                'count_prof'=>$count_prof ,
                'count_etudients'=>$count_etudients ,
                'count_modules'=>$count_modules ,
                'count_filiers'=>$count_filiers ,
                'count_questions'=>$count_questions ,




    ]);
        /*return view('home');*/
    }
   
}
