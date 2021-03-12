<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $users = \App\User::get();
    return view('welcome', compact('users'));
});



Route::get('/t', function () {
    $length = 10;
    $random_str = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);

    $user = \App\User::create(['name' => 'singgih', 'email' => 'singgihsad@lll.com' . $random_str, 'password' => 'hehehehehe']);
    event(new \App\Events\SendMessage(['data' => $user]));
    return response()->json(['data' => $user]);
});
