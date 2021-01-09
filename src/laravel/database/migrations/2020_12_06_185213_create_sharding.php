<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSharding extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       // DB::statement("SET citus.replication_model = 'streaming';");
        //DB::statement('SELECT create_distributed_table("users", "tenant_id");');
       // DB::statement('SELECT create_distributed_table("warehouses", "tenant_id");');
    //    DB::statement('SELECT create_distributed_table("warehouse_ios", "tenant_id");');
        //http://docs.citusdata.com/en/v9.5/get_started/tutorial_multi_tenant.html#distributing-tables-and-loading-data
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
