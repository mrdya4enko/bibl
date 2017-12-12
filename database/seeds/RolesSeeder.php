<?php

use Illuminate\Database\Seeder;
use App\role;
class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=role::create([
            'name'=>'Admin',           
            ]);
        $reader=role::create([
            'name'=>'Reader',           
            ]);
        $superadmin=role::create([
            'name'=>'SuperAdmin',           
            ]);
    }
}
