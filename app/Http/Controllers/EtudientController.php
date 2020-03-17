<?php

namespace App\Http\Controllers;

use App\Etudient;
use App\User;
use Illuminate\Http\Request;


class EtudientController extends Controller
{

    public $model = 'user';
    public function filter_fields(){
        return [
            'avatar'=>null,
            'name'=>[
                'type'=>'text',
            ],
            'email'=>[
                'type'=>'text',
            ],
            'phone'=>[
                'type'=>'text',
            ]
        ];
    }

    public function __construct()
    {
        //$this->middleware('auth');

    }

    /*
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where($this->filter(false))->where('role','ETUDIENT')
                        ->orderBy($this->orderby, 'desc')->paginate($this->perpage())
                        ->withPath($this->url_params(true,['page'=>null]));

        return view('user.list', [
            'results'=>$users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Etudient  $etudient
     * @return \Illuminate\Http\Response
     */
    public function show(Etudient $etudient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Etudient  $etudient
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudient $etudient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Etudient  $etudient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudient $etudient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Etudient  $etudient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudient $etudient)
    {
        //
    }
}
