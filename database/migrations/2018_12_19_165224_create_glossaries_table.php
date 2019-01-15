<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGlossariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('glossaries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('chapter_id')->unsigned();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->char('letter', 2)->index();
            $table->string('slug');
            $table->string('title');
            $table->longText('text');
            $table->string('img')->nullable();
            $table->string('preview')->nullable();
            $table->string('alt')->nullable();
            $table->string('img_title')->nullable();
            $table->integer('published');
            $table->string('english_synonims')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('chapter_id')->references('id')->on('chapters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('glossaries');
    }
}
