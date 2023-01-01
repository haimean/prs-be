<?php

use App\Models\Comment;
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
        Schema::create('map_comments_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Comment::class);
            $table->string('comment_child_id')->foreignIdFor(Comment::class);
            // $table->foreignId('comment_child_id')->constrained('comments');
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
        Schema::dropIfExists('map_comments_comments');
    }
};
