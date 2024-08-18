<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
Route::controller(\App\Http\Controllers\ProjectController::class)
    ->name("projects.")
    ->group(
        function (){
            Route::get('/','index')->name('index');
            Route::get('/detail-project/{id}','project')->name('show')->where('id', '[0-9]+');
        }
    );

Route::get('/send-email', function () {
    Mail::mailer('mailjet')->to('kakolats@gmail.com')->send(new \App\Mail\YourMailable());
    return 'Email sent successfully!';
});
