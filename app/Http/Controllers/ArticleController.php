<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function single(Article $article)
    {
//        dd($article);
        return view("single", compact("article"));
    }
}
