<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArticleResource;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles= Article::latest()->get();

        return ArticleResource::collection($articles);
    }
    
    public function latest(){
        $articles= Article::latest()->take(7)->get();
        return ArticleResource::collection($articles);
    }
}
