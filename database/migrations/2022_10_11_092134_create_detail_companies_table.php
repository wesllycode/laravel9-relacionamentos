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
        Schema::create('detail_companies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id');
            $table->char('state',15);
            $table->char('city',150);
            $table->char('district',100);
            $table->string('street');
            $table->string('cep',8);
            $table->char('cellphone',10);
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
        Schema::dropIfExists('detail_companies');
    }
};
