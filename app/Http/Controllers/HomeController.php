<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;

class HomeController extends Controller
{
    public function home()
    {
//        $user = User::find(5);
//        return $user->articles()->get();
//        $articles = Article::find(2);
//        return $articles->user()->first();
//        return $articles->user;
//        $articles = Article::find(5);
////        return $articles->user()->first();
//        $articles->user;

//        Mail::to("mohammadjavadasnaashari@gmail.com")->send(new TestMail("MJ", 2003));
        $articles = Article::orderBy("id", "desc")->get();
        return view("index", compact("articles"));
    }

    public function about()
    {
        return view("about");
    }

    public function contact()
    {

    }
}
