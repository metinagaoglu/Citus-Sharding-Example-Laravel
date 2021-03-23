<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateWarehouseIosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouse_ios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type'); //TODO: enum
            $table->float('amount');
            $table->foreignIdFor('warehouse','warehouse_id');
            $table->foreignIdFor('tenants','tenant_id');
            $table->timestamps();

            $table->unsignedInteger('id')->change();
            $table->dropPrimary('id');
            $table->primary(['id','tenant_id']);
            $table->increments('id')->change();
        });
        DB::statement("SELECT create_distributed_table('warehouse_ios','tenant_id');");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('warehouse_ios');
    }
}
