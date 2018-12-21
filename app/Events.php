<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    //
    protected $fillable = [
        'meta_title',
        'meta_description',
        'slug',
        'title',
        'subtitle',
        'text',
        'published',
        'event_date'
    ];

    public function scopePublished($query){
        return $query->where('published', 1);
    }

    public function scopeSortAsc($query){
        return $query->orderBy('created_at', 'ASC');
    }

    public function scopeSortDesc($query){
        return $query->orderBy('created_at', 'DESC');
    }
}
