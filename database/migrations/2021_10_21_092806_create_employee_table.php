<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('DepartementID');
            $table->string('FirtsName', 15);
            $table->string('LastName', 15);
            $table->enum('Gender',['M','F']);
            $table->string('Position');
            $table->integer('Salary');
            $table->timestamps();

            $table->foreign('DepartementID')->references('id')->on('master_department');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
}
