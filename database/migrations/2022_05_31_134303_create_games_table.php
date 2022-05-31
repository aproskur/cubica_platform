<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('excerpt');
            $table->text('description')->nullable();
            $table->decimal('price');
            $table->string('slug')->nullable();
            $table->string('cover_photo_path', 2048)->nullable();
            $table->string('aim')->nullable();
            $table->string('type')->nullable();
            $table->string('audience')->nullable();
            $table->string('category')->nullable();
            $table->string('competence')->nullable();
            $table->string('tags')->nullable();
            $table->string('author')->nullable();
            $table->string('co-authors')->nullable();
            $table->double('rating')->nullable();
            $table->integer('total_runs')->nullable();
            $table->string('additional_photo_path', 2048)->nullable();
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
        Schema::dropIfExists('games');
    }
}
