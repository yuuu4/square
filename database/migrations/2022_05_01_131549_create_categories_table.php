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
        Schema::create('categories', function (Blueprint $table) {
        $table->id();
        $table->string('name', 50);
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
        // 外部キー制約を無効化
        Schema::disableForeignKeyConstraints();

        Schema::dropIfExists('categories');

        // 外部キー制約を有効化
        Schema::enableForeignKeyConstraints();
    }
};
