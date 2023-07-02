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
        $this->middleware("auth")->only(["create", "destroy"]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.articles.index", [
            "articles" => Article::all()
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
        return view("admin.articles.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        return $request->all();
        $validate_data = $request->validated();

//        Article::create([
//            "user_id" => auth()->user()->id,
//            "title" => $validate_data["title"],
////            "slug" => $validate_data["title"],
//            "body" => $validate_data["body"]
//        ]);

        auth()->user()->articles()->create([
            "title" => $validate_data["title"],
            "body" => $validate_data["body"]
        ]);

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
        return view("admin.articles.edit", [
            "article" => $article
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleRequest $request, Article $article)
    {
        $validate_data = $request->validated();
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
