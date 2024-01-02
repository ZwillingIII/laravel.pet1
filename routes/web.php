<?php

// Controllers
use App\Http\Controllers\PostController;
use App\Http\Controllers\Posts\CommentController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('main', ["key"=>config('app.locale', 'en'), "num"=>app('sub')->sub()]);
// });

Route::redirect("/home", '/');

Route::controller(PostController::class)->group(function() {
    Route::get("/posts", "index")->name("posts.index");

    Route::get("/posts/create", "create")->name("posts.create");

    Route::post("/posts", "store")->name("posts.store");

    Route::get("/posts/{post}", "show")->name("posts.show");

    Route::get("/posts/{post}/edit", "edit")->name("posts.edit")->middleware("token");

    Route::put("/posts/{post}", "update")->name("posts.update");

    Route::delete("posts/{post}", "delete")->name("posts.delete");
});



Route::controller(CommentController::class)->group(function() {
    Route::get("/posts/{post}/comments/{comment}/edit", "edit")->name("comments.edit");
});

Route::view("/", "main", ["key"=>config('app.locale', 'en'), "num"=>app('sub')->sub()]);

Route::view("/vue", "vue");
Route::view("/vue-about", "vue");
Route::view("/vue-name", "vue");


// Route::post("/posts/{post}", [PostRequest::class, "edit"])->name("posts.edit");
