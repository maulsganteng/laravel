<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cobacontroller;

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
Route::get('/', function () {
    return view('welcome');
});
 Route::get("example", function() {
    return " Example route get";
 } );

 Route::get("coba", function (){
    return view("coba", ['nama' => 'Mdo']);
 });

 Route::get("/example/{example}",function ($example) {
         return "example number : $example";
 });
Route::get("/posts/{postid}/comments/{commentsid}", function ($postid, $commentsid){
   return "ini post ke: $postid dan comments ke: $commentsid";
});

Route::get("post/{postid}", function ($postid = null){
   return "post opsional: $postid";
});
Route::get("/coba/example",[cobacontroller::class,"example"]);

Route::get("/coba/request",[CobaController::class,"request"]);
Route::post("/coba/nested-request",[CobaController::class,"nestedRequest"]);
