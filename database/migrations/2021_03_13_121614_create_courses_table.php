<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->foreignId('category_id')->nullable();
            $table->string('slug')->nullable();
            $table->string('overview')->nullable();
            $table->string('image')->nullable();
            $table->string('thumb_image')->nullable();
            $table->string('video')->nullable();
            $table->integer('session')->default(0);
            $table->decimal('price')->nullable();
            $table->decimal('price_per_session')->nullable();
            $table->decimal('strike_out_price')->nullable();
            $table->enum('state_id', ['0', '1', '2', '3']);
            $table->foreignId('createdby_id')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('courses');
    }
}
