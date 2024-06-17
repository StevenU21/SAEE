<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');

            //relaciones
            $table->integer('area_id')->unsigned();
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('center_id')->unsigned();
            $table->foreign('center_id')->references('id')->on('centers')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('modality_id')->unsigned();
            $table->foreign('modality_id')->references('id')->on('modalities')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
