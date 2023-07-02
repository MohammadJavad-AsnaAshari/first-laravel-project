<?php

use App\Models\Article;
use Database\Factories\ArticleFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get("/home", "App\\Http\\Controllers\\HomeController@home");
Route::get("article/{article:slug}", "App\\Http\\Controllers\\ArticleController@single");
Route::get("/about", "App\\Http\\Controllers\\HomeController@about")->middleware("guest");
Route::get("/check/database", function () {
    $articles = Article::all(); //Eloquent Methods
    $articles = Article::orderBy("id")->get(); //Query Builder Methods
    dd($articles);
});
Route::get("/factory/create", function () {
//   factory(Article::class)->create
    $articles = Article::factory(5)->create();
    dd($articles);
});

Route::prefix("/admin")->namespace("App\\Http\\Controllers\\Admin\\")->middleware("auth")->group(function () {
//    Route::get("/articles", "ArticleController@index");
//    Route::get("/articles/create", "ArticleController@create");
//    Route::post("/articles/create", "ArticleController@store");
////    Route::post("/articles/create", function () {
////        dd(request()->all());
////    });
////    Route::post("/articles/create", function (Request $request) {
////        dd($request->all());
////    });
//    Route::get("/articles/{articleSlug}/edit", "ArticleController@edit");
//    Route::put("/articles/{article}/edit", "ArticleController@update");
//    Route::delete("/articles/{article}", "ArticleController@destroy");

    Route::resource("articles", "ArticleController")->except(["show"]);
});

//Route::get("articles", function () {
//    return view("admin.articles.create");
//});

Auth::routes();

