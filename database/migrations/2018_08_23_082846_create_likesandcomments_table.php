<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikesandcommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likesandcomments', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string("user_id");
            $table->string("story_id");
            $table->string("hash")->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likesandcomments');
    }
}
