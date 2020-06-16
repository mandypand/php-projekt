<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Nisse',
            'email' => 'Nisse@nisse.se',
            'password' => '$2y$10$Vwjz/hAbeZjOxFN7TyCWFOO1QtgYSzvBWHdNDRjvi8Zsb1MqmqsBO',
            'created_at' => '2020-06-10 07:40:15',
            'updated_at' => '2020-06-10 07:40:15',
            'user_type_id' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Kalle',
            'email' => 'kalle@kalle.se',
            'password' => '$2y$10$axPpLekvmdEmnyaNBUgzseSPhSncwr3to7xeWy.tRJhi6fsW7XRVq',
            'created_at' => '2020-06-10 07:40:15',
            'updated_at' => '2020-06-10 07:40:15',
            'user_type_id' => 2,
        ]);
    }
}
