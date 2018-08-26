<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('title',255);
            $table->string('city',255);
            $table->string('private')->default('public');
            $table->text('description');
            $table->text('images')->nullable();
            $table->text('title_img')->nullable();
            $table->integer('flags')->default(0);
            $table->integer('likes')->default(0);

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
        Schema::dropIfExists('stories');
    }
}
