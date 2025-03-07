<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePunteroreporteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('punteroreporte', function (Blueprint $table) {
            $table->foreign('id_reporte')->references('id_reporte')->on('reporte');
            $table->foreign('id_saldo')->references('id_saldo')->on('saldocaja');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('punteroreporte');
    }
}
