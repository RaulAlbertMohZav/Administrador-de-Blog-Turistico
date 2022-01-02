<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Administrador = Role::query()->create([
            'name' => 'Administrator'
        ]);
        $CommonUser = Role::query()->create([
            'name' => 'common-user'
        ]);

    }
}
