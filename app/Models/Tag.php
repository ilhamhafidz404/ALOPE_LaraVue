<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Serie;

class Tag extends Model
{
    use HasFactory;

    public function Serie(){
        return $this->belongsToMany(Serie::class);
    }
}
