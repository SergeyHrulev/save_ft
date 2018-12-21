<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    //
    protected $fillable = [
        'meta_title',
        'meta_description',
        'slug',
        'title'
    ];

    public function glossary(){
        return $this->hasMany(Glossary::class);
    }

    public function scopeSortAsc($query){
        return $query->orderBy('created_at', 'ASC');
    }

    public function scopeSortDesc($query){
        return $query->orderBy('created_at', 'DESC');
    }
}
