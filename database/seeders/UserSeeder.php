<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_admin = Role::findByName('super_admin');

        $user = User::factory()->create(['name' => 'Naufal Hady', 'username' => 'naufal_hady', 'email' => 'naufalhady08@gmail.com']);

        $user->assignRole($super_admin);
    }
}