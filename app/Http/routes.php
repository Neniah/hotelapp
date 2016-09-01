<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'adminapi'], function(){
  Route::resource('room_type', 'RoomTypeController');
});
