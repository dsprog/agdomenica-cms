<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoteUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('note_user', function (Blueprint $table) {
            $table->foreignId('note_id', 'fk_note_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id', 'fk_user_id')->constrained()->onDelete('cascade');
            $table->string('note')->default(0);
            $table->primary(['user_id', 'note_id']);
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
        Schema::dropIfExists('note_user');
    }
}
