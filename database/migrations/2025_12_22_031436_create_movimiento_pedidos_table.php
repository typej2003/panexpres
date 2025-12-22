<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimientoPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimiento_pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('nropedido');
            $table->bigInteger('userdelivery_id');
            $table->string('origen');
            $table->string('destino');
            $table->decimal('costeenvio', 12, 2)->default(0);
            $table->string('condicion')->nullable();
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
        Schema::dropIfExists('movimiento_pedidos');
    }
}
