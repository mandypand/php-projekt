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
            'name' => 'kalle',
            'email' => 'kalle@kalle.se',
            'password' => '$2y$10$pa4eoeErr5Vt3Vgt.ATWPOooIlkc4xGK/cjcxuCxacSJJRo4Fo0Rm',
            'created_at' => '2020-06-10 07:40:15',
            'updated_at' => '2020-06-10 07:40:15',
            // 'user_type_id' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Bruna',
            'email' => 'bpiloto@rocketmail.com',
            'password' => '$2y$10$Za6K4PFxWhJw0pJBQ2VsZ.ynVHtSXFbxmFo72A7k3L4agmKQvRzH6',
            'created_at' => '2020-06-10 07:40:15',
            'updated_at' => '2020-06-10 07:40:15',
            // 'user_type_id' => 1,
        ]);
    }
}
