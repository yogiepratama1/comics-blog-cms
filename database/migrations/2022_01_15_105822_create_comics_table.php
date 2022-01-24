<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->integer('position')->nullable();
            $table->foreignId('universe_id');
            $table->foreignId('timeline_id');
            $table->string('slug');
            $table->string('name');
            $table->text('issuenumber');
            $table->text('issuelist');
            $table->string('image')->nullable();
            $table->text('excerpt');
            $table->text('body');
            // untuk timestamp
            $table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('comics');
    }
}
