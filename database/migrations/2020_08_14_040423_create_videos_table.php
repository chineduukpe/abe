<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('video_title');
            $table->text('video_description');
            $table->string('video_code');
            $table->text('video_preview_url');
            $table->text('video_url');
            $table->string('video_length');
            $table->boolean('is_featured')->default(false);
            $table->integer('category');
            $table->integer('topic');
            $table->text('video_image_url');
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
        Schema::dropIfExists('videos');
    }
}
