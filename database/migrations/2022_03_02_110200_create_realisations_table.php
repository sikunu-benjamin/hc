<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realisations', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('categories');
            $table->text('description');
            $table->text('desc_content_1');
            $table->text('desc_content_2');
            $table->string('image');
            $table->string('thunmail');
            $table->string('title');
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
        Schema::dropIfExists('realisations');
    }
};
