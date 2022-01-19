<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAracsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aracs', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title',150);
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('image',75)->nullable();
            $table->integer('category_id')->nullable();
            $table->string('user_id')->nullable();
            $table->number('price')->nullable();
            $table->string('detail',150)->nullable();
            $table->string('status',5)->nullable()->default('False');
            $table->string('yakit_turu',75)->nullable();
            $table->string('brand_id',150)->nullable();
            $table->string('seri',150)->default(1)->nullable();
            $table->string('model',150)->default(1)->nullable();
            $table->string('yil')->nullable();
            $table->float('km')->nullable();
            $table->string('cekis_tipi',75)->nullable();
            $table->string('vites_tipi',75)->nullable();
            $table->date('ilan_tarihi')->nullable();
            $table->string('durum')->default(1)->nullable();
            $table->string('kimden',75)->nullable();
            $table->string('iletisim',150)->nullable();
            $table->number('motor_power',75)->nullable();   //Motor gücü
            $table->number('engine_capacity',150)->nullable();  //Motor hacmi
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
        Schema::dropIfExists('aracs');
    }
}
