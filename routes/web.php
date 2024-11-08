<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function() {
    return view('about', ['name' => "Rony Hossain"]);
});

Route::get('/users', function() {
    $users = [
        ['name' => "Rony Hossain", 'email' => "rony.hossain@gmail.com", 'id'=> 1],
        ['name' => "Tuhin Hossain", 'email' => "tuhin.hossain@gmail.com", 'id'=> 2],
        ['name' => "Sirajul Islam", 'email' => "sirajul.islam@gmail.com", 'id'=> 3],
        ['name' => "Abu Sufian", 'email' => "abu.sufian@gmail.com", 'id'=> 4],
        ['name' => "Abu Sayeed", 'email' => "abu.sayeed@gmail.com", 'id'=> 4],
    ];

    return view('users', ['users' => $users]);
});

Route::get('/user/{id}', function($id) {
    $users = [
        ['name' => "Rony Hossain", 'email' => "rony.hossain@gmail.com", 'id'=> 1],
        ['name' => "Tuhin Hossain", 'email' => "tuhin.hossain@gmail.com", 'id'=> 2],
        ['name' => "Sirajul Islam", 'email' => "sirajul.islam@gmail.com", 'id'=> 3],
        ['name' => "Abu Sufian", 'email' => "abu.sufian@gmail.com", 'id'=> 4],
        ['name' => "Abu Sayeed", 'email' => "abu.sayeed@gmail.com", 'id'=> 4],
    ];
 
    for($i = 0; $i < count($users); $i++) {
        if($users[$i]['id'] == $id) {
            return view('user', ['user' => $users[$i]]);
        }
    }
  
    
    // return view('user', ['id' => $id]);
});