<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            $table->id();
            $table->string('thumbnail')->default('default.jpg');
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description');
            $table->enum('status', ['complete', 'development', 'stuck'])->default('development');
            $table->enum('level', ['beginner', 'intermediate'])->default('beginner');
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
        Schema::dropIfExists('series');
    }
}
