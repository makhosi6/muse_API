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
            $table->string('url')->nullable();
            $table->string('headline')->unique();
            $table->string('lede')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('category')->nullable();
            $table->string('catLink')->nullable();
            $table->string('images')->nullable();
            $table->string('key')->nullable();
            $table->string('label')->nullable();
            $table->string('subject')->nullable();
            $table->string('format')->nullable();
            $table->string('about')->nullable();
            $table->string('src_name')->nullable();
            $table->string('src_url')->nullable();
            $table->string('src_logo')->nullable();
            $table->boolean('isVid');
            $table->string('vidLen')->nullable();
            $table->string('type')->nullable();
            $table->string('tag')->nullable();
            $table->string('tags')->nullable();
            $table->string('author')->nullable();
            $table->string('authors')->nullable();
            $table->string('date')->nullable();
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
