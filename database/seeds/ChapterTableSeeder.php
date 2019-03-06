<?php

use Illuminate\Database\Seeder;

class ChapterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Chapter::class, 3)->create()->each(function ($chapter){
           $chapter->glossary()->saveMany(factory(App\Glossary::class, 10)->make());
        });
    }
}
