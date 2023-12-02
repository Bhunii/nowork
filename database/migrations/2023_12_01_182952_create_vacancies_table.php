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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_company')->constrained('companies');
            $table->string('occupational_profile');
            $table->string('number_vacancy');
            $table->string('workday');
            $table->foreignId('id_departament')->constrained('departaments');
            $table->foreignId('id_municipality')->constrained('municipalities');
            $table->string('addres');
            $table->date('start_date');
            $table->date('end_date');
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
        Schema::dropIfExists('vacancies');
    }
};
