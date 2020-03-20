<?php

Route::group(['middleware' => 'web'], function () {

    Route::group(['middleware' => 'auth','prefix' => '/admin/cours/'], function () {

        Route::get('list', 'CoursController@index')
            ->name('cours')
            ->middleware('Admin:PROF');
        
        Route::get('create', 'CoursController@create')
            ->name('cours_create')
            ->middleware('Admin:PROF');
        
        Route::post('create', 'CoursController@store')
            ->name('cours_store')
            ->middleware('Admin:PROF');
        
        Route::get('{id}/delete', 'CoursController@destroy')
            ->name('cours_delete')
            ->middleware('Admin:PROF')
            ->where('id', '[0-9]+');
        
        /*Route::get('{id}', 'CoursController@show')
            ->name('cours_show')
            ->middleware('Admin:PROF')
            ->where('id', '[0-9]+');*/
        
        Route::get('{id}/edit', 'CoursController@edit')
            ->name('cours_edit')
            ->middleware('Admin:PROF')
            ->where('id', '[0-9]+');

        Route::get('{id}', 'CoursController@edit')
            ->name('cours_show')
            ->middleware('Admin:PROF')
            ->where('id', '[0-9]+');
        
        Route::post('{id}', 'CoursController@update')
            ->name('cours_update')
            ->middleware('Admin:PROF')
            ->where('id', '[0-9]+');
        
        Route::get('{id}/add-question', 'CoursController@add_question')
            ->name('cours_add_question')
            ->middleware('Admin:PROF')
            ->where('id', '[0-9]+');
        

        // liens of Etudient

        Route::get('mes-cours', 'CoursController@cours_etudient_list')
            ->name('cours_etudient_list')
            ->middleware('Admin:ETUDIENT');

        /*Route::get('{id}', 'CoursController@show')
            ->name('cours_show')
            ->middleware('Admin:PROF')
            ->where('id', '[0-9]+');*/
                
        Route::get('{id}/add-question', 'CoursController@add_question')
            ->name('cours_add_question')
            ->middleware('Admin:PROF')
            ->where('id', '[0-9]+');
        
    });
});