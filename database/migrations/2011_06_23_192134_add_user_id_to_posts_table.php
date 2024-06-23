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
        Schema::table('posts', function (Blueprint $table) {
            // もし'user_id'カラムがまだ存在しない場合のみ追加する
            if (!Schema::hasColumn('posts', 'user_id')) {
                $table->unsignedBigInteger('user_id')->nullable(); // 例えばnullableとして追加
                // 外部キー制約などの追加も忘れないでください
                // $table->foreign('user_id')->references('id')->on('users');
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
       Schema::table('posts', function (Blueprint $table) {
            // ロールバック時の処理（必要であれば追加）
            // 例：$table->dropColumn('user_id');
        });
    }
};