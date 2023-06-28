<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function home()
    {
        Mail::to("mohammadjavadasnaashari@gmail.com")->send(new TestMail("MJ", 2003));
        $articles = Article::orderBy("id", "desc")->get();
        return view("home", compact("articles"));
    }

    public function about()
    {
        return view("about");
    }

    public function content()
    {

    }
}
