<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class WarehousesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('warehouses')->insert([
            'warehouse_name' => 'Nilüfer Şube',
            'tenant_id' => 1
        ]);
        for ($i = 0; $i <= 6; $i++) {
            DB::table('warehouses')->insert([
                'warehouse_name' => Str::random(10),
                'tenant_id' => 1
            ]);
        }

        for ($i = 0; $i <= 4; $i++) {
            DB::table('warehouses')->insert([
                'warehouse_name' => Str::random(10),
                'tenant_id' => $i++
            ]);
        }
    }
}
