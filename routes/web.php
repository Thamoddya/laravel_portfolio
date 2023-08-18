<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('components.screen.mainScreen');
})->name('home');

Route::post('/contact_mail',[MailController::class,'contact_mail_send']);
Route::get('/contact',function(){
    return view('components.screen.contactScreen');
})->name('contact_mail');
