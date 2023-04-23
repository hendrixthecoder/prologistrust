<?php

namespace Database\Seeders;

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
    }
}
