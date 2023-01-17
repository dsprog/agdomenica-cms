<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('name');
            $table->string('slug');
            $table->string('code', 20);
            $table->string('info1')->nullable();
            $table->text('info1_text')->nullable();
            $table->string('info2')->nullable();
            $table->text('info2_text')->nullable();
            $table->string('info3')->nullable();
            $table->text('info3_text')->nullable();
            $table->string('capa');
            $table->string('image')->nullable();
            $table->tinyInteger('icon1')->nullable()->default(0);
            $table->tinyInteger('icon2')->nullable()->default(0);
            $table->tinyInteger('icon3')->nullable()->default(0);
            $table->tinyInteger('icon4')->nullable()->default(0);
            $table->tinyInteger('icon5')->nullable()->default(0);
            $table->tinyInteger('status')->nullable()->default(0);
            $table->tinyInteger('menu')->nullable()->default(0);
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
        Schema::dropIfExists('products');
    }
}
