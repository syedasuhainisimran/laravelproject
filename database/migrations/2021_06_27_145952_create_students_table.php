<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            $table->string('name', 100);

            $table->string('name', 100);

            $table->string('class', 100);

            $table->string('section', 100);

            $table->integer('roll');

            $table->string('email', 100);

            $table->double('age', 8,2);

            $table->text('description',);

            $table->tinyInteger('status',) ->default('1');

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
        Schema::dropIfExists('students');
    }
}



