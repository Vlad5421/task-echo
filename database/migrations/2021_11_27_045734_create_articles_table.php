<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('article_img');
            $table->tinyText('article_excerpt');
            $table->text('body_raw');
            $table->text('body_html');
            $table->bigInteger('autor_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('autor_id')->references('id')->on('autors');
            $table->foreign('category_id')->references('id')->on('articles_categories');
            $table->string('slug')->unique();
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
