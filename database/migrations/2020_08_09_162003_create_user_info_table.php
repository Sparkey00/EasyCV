<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_info', function (Blueprint $table) {
            $table->foreignId('user_id')->comment('Id пользователя');
            $table->string('first_name')->nullable(false)->comment('Имя пользователя');
            $table->string('second_name')->default('')->comment('Отчество пользователя');
            $table->string('surname')->nullable(false)->comment('Фамилия пользователя');
            $table->string('address')->nullable(false)->comment('Адресс');
            $table->string('phone')->nullable(false)->comment('Телефон');
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
        Schema::dropIfExists('user_info');
    }
}
