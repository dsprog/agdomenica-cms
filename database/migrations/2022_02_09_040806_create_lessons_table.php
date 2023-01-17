<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ead_id')->constrained();
            $table->foreignId('discipline_id')->constrained();
            $table->string('title');
            $table->text('resume');
            $table->string('vimeo_id');
            $table->string('download_url')->nullable();
            $table->boolean('active')->default(false);
            $table->date('expiration_date')->nullable();
            $table->date('published_at');
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
        Schema::dropIfExists('lessons');
    }
}
