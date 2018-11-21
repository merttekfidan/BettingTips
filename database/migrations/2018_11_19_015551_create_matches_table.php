<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tarih');
            $table->time('saat');
            $table->integer('kod');
            $table->string('evSahibi');
            $table->string('deplasman');
            $table->string('tahmin');
            $table->float('oran',2,2);
            $table->string('organizasyon');
            $table->integer('status_id');
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
        Schema::dropIfExists('matches');
    }
}
