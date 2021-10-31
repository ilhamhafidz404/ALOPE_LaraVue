<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArticleResource;
use App\Http\Resources\SerieResource;
use App\Http\Resources\VideoResource;
use App\Models\Article;
use App\Models\Serie;
use App\Models\Video;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function index(){
        $series= Serie::latest()->get();
        
        return SerieResource::collection($series);
    }

    public function topic(){
        $series= Serie::latest()->filter(request(['tag']))->get();

        return SerieResource::collection($series);
    }
    
    public function filterContent(Serie $serie){
        $videos= Video::whereSerieId($serie->id)->get();
        // $articles= Article::whereSerieId($serie->id)->get();
        // and ArticleResource::collection($articles)

        return VideoResource::collection($videos);
    }
}
