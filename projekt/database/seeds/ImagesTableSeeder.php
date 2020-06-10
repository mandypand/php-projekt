<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'name' => 'storage/uploads/joker.jpg',
            'description' => 'bild',
            'created_at' => '2020-06-10 07:40:15',
            'updated_at' => '2020-06-10 07:40:15',
            'movie_id' => 1,
        ]);
        DB::table('images')->insert([
            'name' => 'storage/uploads/avengers.jpg',
            'description' => 'bild',
            'created_at' => '2020-06-10 07:40:15',
            'updated_at' => '2020-06-10 07:40:15',
            'movie_id' => 2,
        ]);
        DB::table('images')->insert([
            'name' => 'storage/uploads/lighthouse.jpg',
            'description' => 'bild',
            'created_at' => '2020-06-10 07:40:15',
            'updated_at' => '2020-06-10 07:40:15',
            'movie_id' => 3,
        ]);
    }
}
