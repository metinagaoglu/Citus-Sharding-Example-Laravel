<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->string('tenant_name',50);
            $table->timestamps();
        });
        DB::statement("SELECT create_distributed_table('tenants','id');");
        //DB::statement("SELECT create_reference_table('tenants');");
        //https://stackoverflow.com/questions/55164247/how-to-create-reference-table-from-another-db-not-postgres
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenants');
    }
}
