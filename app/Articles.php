<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Articles extends Model
{
    use SoftDeletes;
    //
    protected $fillable = [
        'meta_title',
        'meta_description',
        'slug',
        'title',
        'subtitle',
        'text',
        'published'
    ];

    protected $dates = ['deleted_at'];

    public function scopePublished($query){
        return $query->where('published', 1);
    }

    public function scopeSortAsc($query){
        return $query->orderBy('updated_at', 'asc');
    }

    public function scopeSortDesc($query){
        return $query->orderBy('updated_at', 'desc');
    }
}
