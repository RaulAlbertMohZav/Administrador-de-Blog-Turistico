<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->times(50)->create();

        $user1 = User::query()->create([
            'username' => 'Mario Albert',
            'name' => 'Mario Alberto Text Extra',
            'email' => 'mario@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('vivaandaz'), // password
            'remember_token' => Str::random(10),
        ]);

        $user2 = User::query()->create([
            'username' => 'Raul Moheno',
            'name' => 'Raul Albert Moheno Zav',
            'email' => 'ramz.162025@gmail.com',
            'email_verified_at' => null,
            'password' => Hash::make('vivaandaz'), // password
            'remember_token' => Str::random(10),
        ]);

        $user1->syncRoles(["Administrator"]);
        $user2->syncRoles(["common-user"]);

    }
}
