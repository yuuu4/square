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
        Schema::create('post_user', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
        $table->foreignId('past_id')->constrained('posts');   //参照先のテーブル名を
        $table->foreignId('user_id')->constrained('users'); 
        //constrainedに記載
        $table->primary(['post_id', 'user_id']); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_user');
    }
};
