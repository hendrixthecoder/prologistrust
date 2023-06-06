<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;

use Illuminate\Database\Seeder;
use function PHPSTORM_META\type;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'Test Admin',
            'email' => 'Admin@admin.com',
            'type' => 'admin',
            'password' => Hash::make('rootadmin'),
        ]);

        //test user

        User::create([
            'firstname' => 'Chris',
            'lastname' => 'Jimmy',
            'username' => 'Chrisssy',
            'phone' => '12345677889',
            'country' => 'America',
            'email' => 'okorofo@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
