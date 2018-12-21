<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Glossary extends Model
{
    //
    protected $fillable = [
        'chapter_id',
        'meta_title',
        'meta_description',
        'slug',
        'title',
        'english_synonims',
        'text',
        'published'
    ];

    public function chapter(){
        return $this->belongsTo(Chapter::class);
    }

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
