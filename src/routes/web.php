<?php

use Illuminate\Support\Facades\Route;
use XuanVinh\Contact\HTTP\Controllers\ContactController;

Route::get('contact',[ContactController::class,'index'])->name('contact.contact');
Route::post('contact',[ContactController::class,'send'])->name('contact.send');
//Route::get('test',function (){
//   return view('contact::test');
//});
