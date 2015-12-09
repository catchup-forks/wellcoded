<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePodcastPodcastTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('podcast__podcast_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->string('title');
            $table->text('description')->nullable();
            $table->string('tags')->nullable();

            $table->integer('podcast_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['podcast_id', 'locale']);
            $table->foreign('podcast_id')->references('id')->on('podcast__podcasts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('podcast__podcast_translations');
    }
}
