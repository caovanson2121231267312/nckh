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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->default('')->nullable();
            $table->string('name_file')->default('')->nullable();
            $table->text('title')->nullable();
            $table->text('keywords')->default('');
            $table->longText('des')->default('');
            $table->longText('review')->default('');
            $table->string('infor')->default('');
            $table->text('main_img')->default('');
            $table->string('price')->default('');
            $table->integer('quantity')->default(0)->unsigned()->index();
            $table->integer('soldout')->default(0)->unsigned()->index();
            $table->bigInteger('view')->default(0);
            $table->string('type')->default('');
            $table->bigInteger('user_id')->unsigned()->index();
            $table->bigInteger('category_id')->unsigned()->index();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->softDeletes();
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
};
