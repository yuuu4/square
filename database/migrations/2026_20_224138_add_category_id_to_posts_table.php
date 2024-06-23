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
            // Check if the column already exists before adding it
            if (!Schema::hasColumn('posts', 'category_id')) {
                $table->foreignId('category_id')->constrained();
            } else {
                // If the column already exists, add foreign key constraint
                $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
            // Drop the foreign key constraint
            $table->dropForeign(['category_id']);
        });
    }
};