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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_recruiter')->constrained('recruiters');
            $table->string('name');
            $table->string('nit')->unique();
            $table->string('company_name');
            $table->string('email')->unique();
            $table->text('nature');
            $table->foreignId('id_departament')->constrained('departaments');
            $table->foreignId('id_municipality')->constrained('municipalities');
            $table->string('addres');
            $table->string('phone');
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
        Schema::dropIfExists('companies');
    }
};
