<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->smallInteger('department_id');
            $table->string('designation');
            $table->string('mobile',12)->nullable();
            $table->bigInteger('salary');
            $table->date('birth_date');
            $table->smallInteger('gender_id');
            $table->smallInteger('blood_group_id')->nullable();
            $table->smallInteger('religion_id')->nullable();
            $table->date('appointment_date');
            $table->date('join_date');
            $table->text('address')->nullable();
            $table->string('avatar')->nullable();
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('employees');
    }
}
