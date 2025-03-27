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
            $table->id(); // Clave primaria autoincremental
            $table->foreignId('id_reporte')->constrained('reporte');
            $table->foreignId('id_saldo')->constrained('saldocaja');
            $table->timestamps(); // Para rastrear creación/actualización
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
