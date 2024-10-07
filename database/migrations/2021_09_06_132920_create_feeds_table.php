<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feeds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('feedable_id');
            //$table->string('feedable_type')->default('like');
            $table->enum('feedable_type', ['comment', 'relation', 'like', 'post', 'message', 'share'])->default('like');
            $table->enum('type', ['comment', 'relation', 'like', 'post', 'share','message'])->default('like');
            $table->enum('status', ['unread', 'received', 'read'])->default('unread');
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
        Schema::dropIfExists('feeds');
    }
}
