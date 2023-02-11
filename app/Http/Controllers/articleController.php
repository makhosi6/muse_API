<?php

namespace App\Http\Controllers;

use App\Exceptions\BadRequest;
use App\Exceptions\NotAllowed;
use App\Exceptions\RecordNotFound;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Resources\ArticleCollection;

class ArticleController extends Controller
{
    //
    public function index()
    {
        try {
            return Article::paginate();
        } catch (\Exception $th) {
            throw new RecordNotFound();
        }
    }

    public function show(Article $article)
    {
        try {
            return $article;
        } catch (\Exception $th) {
            throw new RecordNotFound();
        }
    }

    public function store(Request $request)
    {
        try {
            $article = Article::create($request->all());
            return response()->json($article, 201);
        } catch (\Exception $th) {
            throw new BadRequest();
        }

    }

    public function update(Request $request, Article $article)
    {
        try {
            $article->update($request->all());
            return response()->json($article, 200);
        } catch (\Exception $th) {
            throw new BadRequest();
        }
    }
    public function delete(Article $article)
    {
        try {
            $article->delete();
            return response()->json(null, 204);
        } catch (\Exception $th) {
            throw new NotAllowed();
        }
    }
}
