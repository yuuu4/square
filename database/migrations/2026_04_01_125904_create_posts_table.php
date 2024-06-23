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
        if (!Schema::hasTable('posts')) {
            Schema::create('posts', function (Blueprint $table) {
                $table->id();
                $table->string('title', 100);
                $table->string('body', 1000);
                $table->timestamps();
                $table->softDeletes();
               
            });
        }
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       if (!Schema::hasTable('posts')) {
            Schema::create('posts', function (Blueprint $table) {
                $table->id();
                $table->string('title', 100);
                $table->string('body', 1000);
                $table->timestamps();
                $table->softDeletes();
                $table->unsignedBigInteger('team_id')->nullable()->change();
            });
        }
    }
};
