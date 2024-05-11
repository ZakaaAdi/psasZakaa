<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OutletsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Outlet::create([
            'name' => 'outlet 1',
            'code' => 'code 1',
            'status' => 'aktif',
            'address' => 'jl. pegangsaan timur',
            'phone' => '0811111111',
        ]);
        \App\Models\Outlet::create([
            'name' => 'outlet 2',
            'code' => 'code 2',
            'status' => 'aktif',
            'address' => 'jl. pegangsaan timur no.2',
            'phone' => '0811222222',
        ]);
        \App\Models\Outlet::create([
            'name' => 'outlet 3',
            'code' => 'code 3',
            'status' => 'aktif',
            'address' => 'jl. pegangsaan timur no.3',
            'phone' => '0811333333',
        ]);
        \App\Models\Outlet::create([
            'name' => 'outlet 4',
            'code' => 'code 4',
            'status' => 'aktif',
            'address' => 'jl. pegangsaan timur no.4',
            'phone' => '0811444444',
        ]);
        \App\Models\Outlet::create([
            'name' => 'outlet 5',
            'code' => 'code 5',
            'status' => 'aktif',
            'address' => 'jl. pegangsaan timur no.5',
            'phone' => '0811555555',
        ]);
        
    }
}
