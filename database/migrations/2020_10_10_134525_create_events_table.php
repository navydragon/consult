<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longtext('description');
            $table->date('date');
            $table->time('time');
            $table->integer('duration')->nullable();
            $table->string('speaker_fullname');
            $table->string('speaker_job');
            $table->string('speaker_company');
            $table->string('speaker_avatar');
            $table->string('status');
            $table->string('url');
            $table->string('record_url')->nullable();
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
        Schema::dropIfExists('events');
    }
}
