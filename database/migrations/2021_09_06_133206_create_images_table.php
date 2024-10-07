<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->enum('type', [
                'alpha',
                'color',
                'profile',
                'default',
                'RGB',
                'RGBAuto',
                'AlphaAuto',
                'AlphaManual',
                'DepthMapAuto',
                'DepthMapManual',
                'Top',
                'Middle',
                'Back',


            ])->default('default');
            $table->text('file_url');
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
        Schema::dropIfExists('images');
    }
}
