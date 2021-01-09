<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tenants')->insert([
            'id' => 1,
            'tenant_name' => 'Metin Tenant'
        ]);
        for ($i = 2; $i <= 4; $i++) {
            DB::table('tenants')->insert([
                'id' => $i,
                'tenant_name' => Str::random(10),
            ]);
        }
    }
}
