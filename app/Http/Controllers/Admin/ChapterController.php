<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ChapterController extends Controller
{
    public function find(Request $request)
    {
        $title = $request->title;
        return $title;
        $chapter = DB::select("
            SELECT id, slug, title
            FROM chapters
            WHERE chapters.title LIKE '%{$title}%'
        ");

        return $chapter;
    }
}
