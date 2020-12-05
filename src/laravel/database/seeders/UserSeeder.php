<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Metin',
            'email' => 'metnagaoglu@gmail.com',
            'password' => Hash::make('21212121'),
            'tenant_id' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'iletisim',
            'email' => 'iletisim@metinagaoglu.com',
            'password' => Hash::make('21212121'),
            'tenant_id' => 2,
        ]);
    }
}
