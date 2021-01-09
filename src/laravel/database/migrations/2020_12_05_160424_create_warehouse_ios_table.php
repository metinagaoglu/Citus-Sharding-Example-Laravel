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
            $table->integer('id');
            $table->integer('from');
            $table->float('input');
            $table->float('output');
            $table->foreignId('warehouse_id');
            $table->foreignId('tenant_id');
            $table->timestamps();
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
