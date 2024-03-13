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
        Schema::create('charges', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_vacancy')->constrained('vacancies');
            $table->foreignId('id_denomination')->constrained('denominations');
            $table->text('functions');
            $table->enum('payment_method',['M','Q']);
            $table->decimal('salary', $precision = 22, $scale = 2);
            $table->enum('type_contract',['I','D']);
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
        Schema::dropIfExists('charges');
    }
};
