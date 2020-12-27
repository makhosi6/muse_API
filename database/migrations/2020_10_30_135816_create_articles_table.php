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
            $table->string('url_src');
            $table->string('src_name');
            $table->string('url');
            $table->string('headline')->unique();
            $table->string('lede');
            $table->string('thumbnail');
            $table->string('src');
            $table->string('type');
            $table->string('category');
            $table->string('catLink');
            $table->string('tag');
            $table->json('tags')->nullable();
            $table->json('images')->nullable();
            $table->boolean('isVid')->nullable();
            $table->string('vidLen')->nullable();
            $table->string('author');
            $table->json('authors')->nullable();
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
