<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->longtext('name');
            $table->bigInteger('type_id')->unsigned()->nullable();
            $table->longtext('description')->nullable();
            $table->bigInteger('author_id')->unsigned()->nullable();
            $table->longtext('url');
            $table->integer('views')->default(0);
            $table->timestamps();
        });
        Schema::table('materials', function($table) {
            $table->foreign('author_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('type_id')->references('id')->on('material_types')->onDelete('set null');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materials');
    }
}
