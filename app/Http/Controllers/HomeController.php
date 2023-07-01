<?php

namespace App\Http\Controllers;

use App\Models\Article;

class HomeController extends Controller
{
    public function home()
    {
//        dd(auth()->user());
//        dd(auth()->check());
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
