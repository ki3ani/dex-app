<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Cow', function (Blueprint $table) {
            $table->id();
            $table->string('tag')->unique();
            $table->string('name');
            $table->date('dob');
            $table->string('gender');
            $table->string('breed');
            $table->string('parent_tag');
            $table->string('currentState');
            $table->date('served_on')->nullable();
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
        Schema::dropIfExists('Cow');
    }
}
