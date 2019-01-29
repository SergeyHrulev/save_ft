<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\File;

class Articles extends Model implements HasMedia
{
    use SoftDeletes;
    use HasMediaTrait;

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

    public function photo(){
        return $this->hasMany(ArticlePhoto::class);
    }

    /*
     * @return media collection
     */

    public function registerMediaCollections()
    {
        // TODO: Implement registerMediaCollections() method.
        $this->addMediaCollection('article-photo');
        $this->addMediaCollection('article-text-photo');
    }

    /*
     * @return thumb img
     */

    public function registerMediaConversions(Media $media = null)
    {
        // TODO: Implement registerMediaConversions() method.
        $this->addMediaConversion('thumb')
            ->width(300)
            ->height(180);
    }
}
