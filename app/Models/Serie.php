<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;

class Serie extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filter) {
        $query->when($filter["tag"] ?? false, function($query, $filter) {
          $query->whereHas("Tag", function($query) use($filter) {
            return  $query->where('slug', $filter);
          });
        });
    }

    public function Tag(){
        return $this->belongsToMany(Tag::class);
    }
}
