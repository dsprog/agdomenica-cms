<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEadUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ead_user', function (Blueprint $table) {
            $table->foreignId('ead_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->boolean('active')->default(false);
            $table->foreign('user_id', 'fk_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('ead_id', 'fk_ead_id')->references('id')->on('eads')->onDelete('cascade');
            $table->primary(['user_id', 'ead_id']);
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
        Schema::dropIfExists('ead_user');
    }
}
