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
            $table->string('id');
            $table->string('url');
            $table->string('headline')->unique();
            $table->string('lede');
            $table->string('thumbnail');
            $table->string('category');
            $table->string('catLink');
            $table->string('images');
            $table->string('key');
            $table->string('label');
            $table->string('subject');
            $table->string('format');
            $table->string('about');
            $table->string('src_name');
            $table->string('src_url');
            $table->string('src_logo');
            $table->string('isVid');
            $table->string('vidLen');
            $table->string('type');
            $table->string('tag');
            $table->string('tags');
            $table->string('author');
            $table->string('authors');
            $table->string('date');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
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
