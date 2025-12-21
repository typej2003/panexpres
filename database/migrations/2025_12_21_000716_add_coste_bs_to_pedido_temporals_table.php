<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCosteBsToPedidoTemporalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pedido_temporals', function (Blueprint $table) {
            $table->decimal('costeBs', 12, 2)->default(0)->after('coste');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pedido_temporals', function (Blueprint $table) {
            $table->dropColumn('costeBs');
        });
    }
}
