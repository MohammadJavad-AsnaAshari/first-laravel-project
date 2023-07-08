<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $articles = Article::where("user_id", $user->id)->get();

        return view("admin.articles.index", [
            "articles" => $articles,
            "user" => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        if ($_GET) {
//            dd($_GET);
//        }
        $user = auth()->user();
        return view("admin.articles.create", compact("user"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
//        return $request->all();
        $validate_data = $request->validated();

//        Article::create([
//            "user_id" => auth()->user()->id,
//            "title" => $validate_data["title"],
////            "slug" => $validate_data["title"],
//            "body" => $validate_data["body"]
//        ]);

        $article = auth()->user()->articles()->create([
            "title" => $validate_data["title"],
            "body" => $validate_data["body"]
        ]);

        $article->categories()->attach($validate_data["categories"]);

        return redirect("/admin/articles/create");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $user = auth()->user();
        return view("admin.articles.edit", [
            "article" => $article,
            "user" => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleRequest $request, Article $article)
    {
        $validate_data = $request->validated();

        $article->categories()->detach();
        $article->categories()->attach($validate_data["categories"]);
        $article->categories()->sync($validate_data["categories"]);

        $article->update($validate_data);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return back();
    }
}
