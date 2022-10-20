<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaunchLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('launch_links', function (Blueprint $table) {
            $table->id();
            $table->string('link');
            $table->string('link_alias')->nullable();
            $table->integer('launch_quantity')->nullable();
            $table->date('expiry')->nullable();
            $table->boolean('archived')->default(0);
            $table->boolean('active')->default(0);
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
        Schema::dropIfExists('launch_links');
    }
}
