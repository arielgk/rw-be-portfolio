<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relations', function (Blueprint $table) {
            $table->id();
//            $table->unsignedBigInteger('sender_id');
//            $table->unsignedBigInteger('recipient_id');
            $table->enum('status', ['pending', 'accepted', 'rejected'])->default('pending');

            $table->foreignId('sender_id')->references('id')->on('users');
            $table->foreignId('recipient_id')->references('id')->on('users');
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
        Schema::dropIfExists('relations');
    }
}
