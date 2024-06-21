<?php

use Illuminate\Support\Facades\Route;
use Muva\Contactform\Http\Controllers\ContactFormController;

Route::middleware(["guest","web"])->group(function () {
Route::get("/contact", [ContactFormController::class, 'create']);
ROute::post('/submit/message', [ContactFormController::class, 'store']);
});