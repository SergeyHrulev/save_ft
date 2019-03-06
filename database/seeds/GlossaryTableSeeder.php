<?php

use Illuminate\Database\Seeder;

class GlossaryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Glossary::class, 30)->create();
    }
}
