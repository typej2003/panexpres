<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagoZellesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago_zelles', function (Blueprint $table) {
            $table->id();
            $table->string('remitente');           // Nombre de quien envía
            $table->decimal('monto', 10, 2);       // Monto del pago
            $table->string('referencia')->unique(); // ID de confirmación (único para evitar duplicados)
            $table->string('estado')->default('Completada'); 
            $table->dateTime('fecha_pago');        // Fecha y hora del correo
            $table->string('alias_identificador')->nullable();
            $table->text('nota_memorandum')->nullable();
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
        Schema::dropIfExists('pago_zelles');
    }
}
