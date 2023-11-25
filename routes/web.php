<?php
use Illuminate\Support\Facades\Route;
use App\Models\Song;

Route::get ('/',function (){
      return view('welcome');
});
Route::get('/veggies/{veggiesName}', function (string $veggiesName) {
    return $veggiesName;
})->whereIn('veggiesName', ['aaloo','bhindi','gobhi','baigan']);

Route::get ('/veggies',function (){
    return view('veggies');
});

Route::get('/songs_static', function () {
    return view('songs_static');
});
  Route::get('/songs', function () {
    return view('songs', [ 'songs' => Song::all() ] );
});
