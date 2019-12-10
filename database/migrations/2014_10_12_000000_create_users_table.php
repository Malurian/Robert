<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->text('website')->nullable();
            $table->string('country');
            $table->text('about')->nullable();
            $table->string('mobile');
            $table->dateTime('date');
            $table->string('avatar')->nullable()->default('avatar.png');
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_admin')->default(false);
            $table->double('wallet', 12, 2)->nullable()->default(0.00);
            $table->enum('user_type', ['host', 'sponsor'])->nullable()->default('host');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
