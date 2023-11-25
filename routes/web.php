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
    $song1 = new Song();
    $song1->setTitle("Stan");
    $song1->setArtist("Eminem");
  
    $song2 = new Song();
    $song2->setTitle("Nothing Else Matters");
    $song2->setArtist("Metallica");
  
    $song3 = new Song();
    $song3->setTitle("With You");
    $song3->setArtist("A P Dhillon");
  
    return view('songs', [ 'songs' => [ $song1, $song2, $song3 ] ]); 
  });
  Route::get('/songs', function () {
    return view('songs', [ 'songs' => Song::all() ] );
});
