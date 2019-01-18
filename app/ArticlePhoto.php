<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticlePhoto extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'article_id',
        'photo',
        'preview',
        'alt',
        'title',
    ];

    public function article(){
        return $this->belongsTo(Articles::class);
    }
}
