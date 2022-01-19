<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title', 150);
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('company', 150)->nullable();
            $table->string('address', 150)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('fax', 20)->nullable();
            $table->string('email', 75)->nullable();
            $table->string('smtpserver', 75)->nullable();
            $table->string('smtpemail', 75)->nullable();
            $table->string('smtppassword', 15)->nullable();
            $table->integer('smptport')->default(0)->nullable();
            $table->string('facebook', 75)->default(0)->nullable();
            $table->string('instagram', 75)->nullable();
            $table->string('twitter', 75)->nullable();
            $table->string('pinterest', 75)->nullable();
            $table->text('aboutus', 75)->nullable();
            $table->text('contact')->nullable();
            $table->text('references')->default(0)->nullable();
            $table->string('status', 75)->nullable();

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
        Schema::dropIfExists('settings');
    }
}
