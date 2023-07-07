<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct()
    {
//        $this->middleware("guest");
    }

    public function single(Article $article)
    {
//        dd($article);
        $user = auth()->user();
        return view("single", compact("article", "user"));
    }
}
