<?php

namespace App\Http\Controllers;

use App\Prof;
use Illuminate\Http\Request;

class ProfController extends Controller
{

    public $model = 'prof';
    public function filter_fields(){
        return [
            'avatar'=>null,
            'matricule'=>[
                'type'=>'text',
                //'operation'=>'='
            ],
            'name'=>[
                'type'=>'text',
            ],
            'cin'=>[
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
        $users = Prof::where($this->filter(false))
                        ->orderBy($this->orderby, 'desc')->paginate($this->perpage())
                        ->withPath($this->url_params(true,['page'=>null]));

        return view('prof.list', [
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
     * @param  \App\Prof  $prof
     * @return \Illuminate\Http\Response
     */
    public function show(Prof $prof)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prof  $prof
     * @return \Illuminate\Http\Response
     */
    public function edit(Prof $prof)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prof  $prof
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prof $prof)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prof  $prof
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prof $prof)
    {
        //
    }
}
