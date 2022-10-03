<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{

    use HasFactory;

    protected $guarded = [];

    public function scopeSearch($query, $terms){

        collect(explode(" ", $terms))
        ->filter()
        ->each(function ($term) use($query){
            $term = '%' . $term . '%';

            $query->where('artist', 'like', $term)
                ->orWhere('song', 'like', $term);
        });
    }

}
