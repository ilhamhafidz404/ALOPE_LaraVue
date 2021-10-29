<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;

class Serie extends Model
{
    use HasFactory;

    public function Tag(){
        return $this->belongsToMany(Tag::class);
    }
}
