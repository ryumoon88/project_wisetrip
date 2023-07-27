<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            // RoleSeeder::class,
            UserSeeder::class,
            ShieldSeeder::class,

            DestinationSeeder::class,
        ]);

        \App\Models\Article::factory(100)->create([
            'user_id' => 2,
        ]);

        \App\Models\City::where('slug',null)->update(['updated_at'=>now()]);
    }
}
