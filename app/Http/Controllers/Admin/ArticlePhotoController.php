<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ArticlePhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic as Image;

class ArticlePhotoController extends Controller
{
    //

    public function savePhoto(Request $request){

        $article_id = 2;

        try{
            $file = Storage::disk('public')->put('\articles\/' . $article_id, $request->photo);

            return $file;
        }catch (\Exception $e){

        }
    }

    public function savePhotoModel(Request $request){
        $article_id = 1;
        //$preview = Storage::disk('public')->put('\articles\preview\/' . $article_id, Image::make($file)->resize(300, null));
        $data = new ArticlePhoto();
        $data->photo = Storage::url($request->photo);
        //$data->preview = Storage::url($preview);
        $data->alt = $request->alt;
        $data->title = $request->title;
        $data->article_id = $article_id;
        $data->save();
        return $data;
    }
}
