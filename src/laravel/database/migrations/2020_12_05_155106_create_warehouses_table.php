<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateWarehousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouses', function (Blueprint $table) {
            $table->increments('warehouse_id');
            $table->string('warehouse_name',50);
            //$table->primary('tenant_id');
            //$table->foreignId('tenant_id')->constrained('tenants');
            $table->foreignIdFor('tenants','tenant_id');
            $table->timestamps();

            $table->unsignedInteger('warehouse_id')->change();
            $table->dropPrimary('warehouse_id');
            $table->primary(['warehouse_id','tenant_id']);
            $table->increments('warehouse_id')->change();

        });
        DB::statement("SELECT create_distributed_table('warehouses','tenant_id');");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('warehouses');
    }
}
