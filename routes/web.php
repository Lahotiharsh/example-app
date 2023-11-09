<?php
use Illuminate\Support\Facades\Route;

Route::get ('/',function (){
      return view('welcome');
});
Route::get('/veggies/{veggiesName}', function (string $veggiesName) {
    return $veggiesName;
})->whereIn('veggiesName', ['aaloo','bhindi','gobhi','baigan']);


