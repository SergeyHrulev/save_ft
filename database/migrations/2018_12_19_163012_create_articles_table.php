<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('slug');
            $table->string('title');
            $table->text('subtitle');
            $table->longText('text');
            $table->string('img')->nullable();
            $table->string('preview')->nullable();
            $table->string('alt')->nullable();
            $table->string('img_title')->nullable();
            $table->integer('published');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
