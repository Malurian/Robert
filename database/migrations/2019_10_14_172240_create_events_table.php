<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('user_id');
            $table->dateTime('date');
            $table->time('from_time');
            $table->time('to_time');
            $table->text('address')->nullable();
            $table->double('amount', 12, 2)->default(0.00);('address');
            $table->text('map')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->default('default.jpg');
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
        Schema::dropIfExists('events');
    }
}
