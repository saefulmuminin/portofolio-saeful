<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeroSlidersTable extends Migration
{
    public function up()
    {
        Schema::create('hero_sliders', function (Blueprint $table) {
            $table->id();
            $table->string('background_image');
            $table->string('title');
            $table->string('subtitle');
            $table->string('button_text')->nullable();
            $table->string('button_url')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hero_sliders');
    }
}
