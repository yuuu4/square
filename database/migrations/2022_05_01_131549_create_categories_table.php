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
       Schema::table('teams', function (Blueprint $table) {
            // Check if column 'user_id' does not exist before adding
            if (!Schema::hasColumn('teams', 'user_id')) {
                $table->bigInteger('user_id')->unsigned()->nullable();
                $table->foreign('user_id')->references('id')->on('users');
            }
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
