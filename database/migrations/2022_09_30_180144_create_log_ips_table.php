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
        Schema::create('log_ips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ixc_user_id')
                ->constrained()
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');    
            $table->foreignId('ip_id')
                ->constrained()
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');      
            $table->foreignId('company_id')
                ->constrained()
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
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
        Schema::dropIfExists('ip_companies');
    }
};
