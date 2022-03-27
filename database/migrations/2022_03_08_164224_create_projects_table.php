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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('prestation');
            $table->string('phone');
            $table->string('type_de_maison');
            $table->string('type_de_construction');
            $table->string('style_de_construction');
            $table->string('nombres_de_pieces');
            $table->string('surfaces');
            $table->string('terrain');
            $table->string('personnel');
            $table->string('user_id');
            $table->string('permis');
            $table->string('budget');
            $table->string('finance');
            $table->string('date_de_demarage');
            $table->string('objectif');
            $table->string('budget_appro');
            $table->enum('status', ['pending', 'approved', 'denied', 'expired'])->default('pending');
            $table->text('description');
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
        Schema::dropIfExists('projects');
    }
};
