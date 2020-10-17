<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialNpaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_npa', function (Blueprint $table) {
                $table->bigInteger('material_id')->unsigned()->index();
                $table->foreign('material_id')->references('id')->on('materials')->onDelete('cascade');

                $table->bigInteger('npa_id')->unsigned()->index();
                $table->foreign('npa_id')->references('id')->on('npas')->onDelete('cascade');
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
        Schema::dropIfExists('material_npa');
    }
}
