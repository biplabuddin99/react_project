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
        Schema::create('patient_registers', function (Blueprint $table) {
            $table->id();
            $table->string('patient_id')->nullable();
            $table->string('name');
            $table->string('age');
            $table->string('phone');
            $table->string('birthdate');
            $table->string('gender');
            $table->string('blood');
            $table->string('address')->nullable();
            $table->string('problem')->nullable();
            $table->string('status')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_registers');
    }
};
