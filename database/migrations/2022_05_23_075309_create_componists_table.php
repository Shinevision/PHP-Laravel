<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComponistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('componists', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->date('geboortedatum');
            $table->foreignId('muziekschool_id');
            $table->foreign('muziekschool_id')->references('id')->on('muziekschools');
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
        Schema::dropIfExists('componists');
    }
}
