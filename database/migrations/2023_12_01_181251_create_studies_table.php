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
        Schema::create('studies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_curriculum')->constrained('curriculum');
            $table->string('name_institution');
            $table->foreignId('id_denomination')->constrained('denominations');
            $table->foreignId('id_departament')->constrained('departaments');
            $table->foreignId('id_municipality')->constrained('municipalities');
            $table->string('addres');
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
        Schema::dropIfExists('studies');
    }
};
