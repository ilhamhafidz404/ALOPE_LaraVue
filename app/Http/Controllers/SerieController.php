<?php

namespace App\Http\Controllers;

use App\Http\Resources\SerieResource;
use App\Models\Serie;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function index(){
        $series= Serie::latest()->get();
        return SerieResource::collection($series);
    }

    public function topic(){
    
    }
}
