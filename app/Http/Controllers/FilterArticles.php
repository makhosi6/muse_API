<?php

namespace App\Http\Controllers;
use App\Exceptions\RecordNotFound;
USE App\Models\Article;

use Illuminate\Http\Request;

class FilterArticles extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }
    public function categories($category)
    {
        try {
            $categories = Article::where('category', '=', $category)->paginate(30);
            return $categories;
        } catch (\Exception $th) {
            throw new RecordNotFound();
        }
    }
    public function trends($num){
        try {
            $trends = Article::where('type', '=', 'trends')->paginate($num);
            return $trends;
        } catch (\Exception $th) {
            throw new RecordNotFound();
        }
    }
    public function hotTrends(){
        try {
            $trends = Article::where('type', '=', 'hot-trends')->get();
            return $trends;
        } catch (\Exception $th) {
            throw new RecordNotFound();
        }
    }
    public function all(){
        try {
            return Article::paginate();
        } catch (\Exception $th) {
            return $th;
        }
    }
}



// articles
// topics
// trends
// hot trends
