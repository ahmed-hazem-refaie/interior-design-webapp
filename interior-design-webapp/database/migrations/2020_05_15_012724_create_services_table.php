<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('hint')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->string('price')->nullable();


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
        Schema::dropIfExists('services');
    }
}

// $table->id();
// $table->string('bookName')->nullable();
// $table->unsignedInteger('pricePerDay')->nullable();
// $table->string('author')->nullable();
// $table->text('description')->nullable();
// $table->string('image')->nullable();
// $table->unsignedInteger('count')->nullable();
// $table->unsignedBigInteger('category_id');
// $table->unsignedBigInteger('user_id');

// $table->softDeletes();
// $table->foreign('category_id')->references('id')->on('categories');
// $table->foreign('user_id')->references('id')->on('users');
