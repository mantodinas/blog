<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('content');
            $table->string('title', 400);
            $table->text('description');
            $table->string('imageLink', 400);
            $table->string('link', 400);
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
