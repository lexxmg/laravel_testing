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
        \App\Models\Post::factory(20)->create();

        //\App\Models\AdminUser::factory(1)->create();
        \App\Models\AdminUser::factory(1)->create([
            'name' => 'admin',
            'email' => 'lexx.mg@gmail.com',
            'password' => bcrypt('123')
         ]);

         \App\Models\Out::insert([
            [
                'name' => 'Свет',
                'out' => '4',
                'type' => 'out',
                'icon_id' => '2',
                'mode_id' => '3',
                'laurent_id' => '192.168.0.101'
            ],

            [
                'name' => 'Цветы',
                'out' => '9',
                'type' => 'out',
                'icon_id' => '2',
                'mode_id' => '3',
                'laurent_id' => '192.168.0.101'
            ],

            [
                'name' => 'Свет с лева',
                'out' => '7',
                'type' => 'out',
                'icon_id' => '2',
                'mode_id' => '3',
                'laurent_id' => '192.168.0.101'
            ]
         ]);
    }
}
