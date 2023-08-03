<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('components.screen.mainScreen');
});

Route::post('/contact_mail',[MailController::class,'contact_mail_send']);
