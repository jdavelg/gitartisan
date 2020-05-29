<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
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
    /* return view('welcome'); */

    $data=[

        'title'=>'hi students i hoppe yuare learning a lot',
'content'=>'this was created for you guys'
    ];

    Mail::send('mail.test', $data, function($message){

        $message->to('mariajose@mycompany.com','MAria')->subject('hello how areU?');
    });
});


