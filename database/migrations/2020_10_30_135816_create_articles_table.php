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
            $table->string('lede')->nullable()->default(null);
            $table->string('thumbnail')->nullable()->default(null);
            $table->string('category')->nullable()->default(null);
            $table->string('catLink')->nullable()->default(null);
            $table->string('images')->nullable()->default(null);
            $table->string('key')->nullable()->default(null);
            $table->string('label')->nullable()->default(null);
            $table->string('subject')->nullable()->default(null);
            $table->string('format')->nullable()->default(null);
            $table->string('about')->nullable()->default(null);
            $table->string('src_name')->nullable()->default(null);
            $table->string('src_url')->nullable()->default(null);
            $table->string('src_logo')->nullable()->default(null);
            $table->boolean('isVid')->default(false);
            $table->string('vidLen')->nullable()->default(null);
            $table->string('type')->nullable()->default(null);
            $table->string('tag')->nullable()->default(null);
            $table->string('tags')->nullable()->default(null);
            $table->string('author')->nullable()->default(null);
            $table->string('authors')->nullable()->default(null);
            $table->string('date')->nullable()->default(null);
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
