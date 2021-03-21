<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableMedia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->integer('model_id')->default(0);
            $table->string('model_type')->default(null);
            $table->string('alt')->default(null);
            $table->string('size')->default(null);
            $table->string('filename')->default(null);
            $table->string('original_name')->default(null);
            $table->string('thumbfile')->default(null);
            $table->string('extension')->default(null);
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('media');
    }
}
