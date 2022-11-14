<?php

namespace Database\Seeders;

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
        \App\Models\Phone::factory(20)->create();
        \App\Models\User::factory(10)->create();
        \App\Models\Post::factory(100)->create();

        //\App\Models\AdminUser::factory(1)->create();
        \App\Models\AdminUser::factory(1)->create([
            'name' => 'admin',
            'email' => 'lexx.mg@gmail.com',
            'password' => bcrypt('123')
         ]);
    }
}
