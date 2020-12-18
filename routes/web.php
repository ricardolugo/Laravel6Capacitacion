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
    return view('welcome');
});
/*
Route::get('/test', function(){
    return "Hola mundo";
});

Route::get('/hola/{nombre?}', function($nombre = "omar"){
    return "Hola $nombre conocenos, <a href='".route("nosotros")."'>nosotros</a>";
});

Route::get('/sobre-nosotros-en-la-web', function(){
    return "<h1>Toda la informacion sobre nosotros</h1>";
})->name("nosotros");

Route::get('/home/{nombre?}/{apellido?}', function($nombre = "Pepe", $apellido = "Lugo") {
    //return view("home")->with("nombre", $nombre)->with("apellido", $apellido);

    $posts = ['Post1', 'Post2', 'Post3', 'Post4'];
    $posts2 = null;

    return view("home", ["nombre" => $nombre, "apellido" => $apellido, "posts" => $posts, "posts2" => $posts2]);
})->name("home");
*/

Route::resource('admin/post', 'dashboard\PostController');