<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stoks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedInteger('quantity');
            $table->unsignedInteger('price');
            $table->string('role')->default('発注確認');
            $table->dateTime('created_at')->nullable(); // 2038年問題があるためdateTimeを使用
            $table->dateTime('updated_at')->nullable(); // 2038年問題があるためdateTimeを使用
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stoks');
    }
}
