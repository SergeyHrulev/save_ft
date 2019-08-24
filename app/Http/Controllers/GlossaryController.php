<?php

namespace App\Http\Controllers;

use App\Glossary;
use App\Alphabet;
use Illuminate\Http\Request;

class GlossaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $glossaries = Glossary::all();
        return $glossaries;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $glossary = Glossary::firstOrCreate([
            'chapter_id' => 1,
            'slug' => Str::slug(Transliteration::make($request->title)),
            'letter' => strtolower(mb_substr($request->title, 0,1)),
            'title' => $request->title,
            'text' => $request->description,
            'published' => false
        ]);
        return $glossary;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Glossary  $glossary
     * @return \Illuminate\Http\Response
     */
    public function show(Glossary $glossary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Glossary  $glossary
     * @return \Illuminate\Http\Response
     */
    public function edit(Glossary $glossary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Glossary  $glossary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Glossary $glossary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Glossary  $glossary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Glossary $glossary)
    {
        //
    }
}
