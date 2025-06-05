<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string(column:'title');
            $table->json(column:'body')->nullable();
            $table->timestamps();
        });

        Schema::create('post_user', function (Blueprint $table) {
            $table->foreignId(column:'post_id')->constrained(table:'posts', indexName: 'posts_user_id')->onDelete(action:'cascade');
            $table->foreignId(column:'user_id')->constrained(table:'users', indexName: 'users_post_id')->onDelete(action:'cascade');
            $table->primary(['post_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
        Schema::dropIfExists('post_user');
    }
};
