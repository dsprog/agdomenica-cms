<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('address_number', 10);
            $table->string('address_city');
            $table->string('address_state', 2);
            $table->string('address_cep', 10);
            $table->string('address_complement')->nullable();
            $table->string('phone', 19);
            $table->string('phone2', 19);
            $table->string('email');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('linkedin');
            $table->string('whatsapp', 19);
            $table->text('map');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configs');
    }
}
