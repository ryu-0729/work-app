<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id'); // INT型でidを設定
            $table->string('name'); // VARCHAR型でnameカラムを用意
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
        Schema::dropIfExists('roles');
    }
}
