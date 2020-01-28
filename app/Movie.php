<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['adult', 'belongs_to_collection', 'budget', 'genres', 
    'homepage', 'id', 'imdb_id', 'original_language', 'original_title',
    'overview', 'popularity', 'poster_path', 'production_companies', 
    'production_countries', 'release_date', 'revenue', 'runtime', 
    'spoken_languages', 'status', 'tagline', 'title', 'video', 'vote_average', 'vote_count'];

    public function scopeWhereLike($query, $column, $value)
    {
        return $query->where($column, 'like', '%'.$value.'%');
    }
    public function scopeOrWhereLike($query, $column, $value)
    {
        return $query->orWhere($column, 'like', '%'.$value.'%');
    }
}
