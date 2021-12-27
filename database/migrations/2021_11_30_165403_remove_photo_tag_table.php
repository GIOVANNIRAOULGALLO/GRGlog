<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemovePhotoTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('_photo_tag');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('_photo_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tag_id')->default(1);
            $table->foreignId('photo_id')->default(1);
            $table->timestamps();
        });
    }
}
