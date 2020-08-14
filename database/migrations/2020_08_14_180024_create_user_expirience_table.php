<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserExpirienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_experience', function (Blueprint $table) {
            $table->id()->comment('id');
            $table->foreignId('user_id')->comment('Id пользователя');
            $table->string('organization')->nullable(false)->comment('Название организации');
            $table->date('start_date')->nullable(false)->comment('Дата старта');
            $table->date('finish_date')->nullable(false)->comment('Дата окончания');
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
        Schema::dropIfExists('user_experience');
    }
}
