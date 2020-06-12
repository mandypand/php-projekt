<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'comments' => 'This movie was awsome!',
            'created_at' => '2020-06-10 07:40:15',
            'updated_at' => '2020-06-10 07:40:15',
            'user_id' => 1,
            'movie_id' => 1,
        ]);
        DB::table('reviews')->insert([
            'comments' => 'Boring just boring WTF',
            'created_at' => '2020-06-10 07:40:15',
            'updated_at' => '2020-06-10 07:40:15',
            'user_id' => 1,
            'movie_id' => 2,
        ]);
        DB::table('reviews')->insert([
            'comments' => 'black and white omg!',
            'created_at' => '2020-06-10 07:40:15',
            'updated_at' => '2020-06-10 07:40:15',
            'user_id' => 1,
            'movie_id' => 3,
        ]);
        DB::table('reviews')->insert([
            'comments' => 'gripande!',
            'created_at' => '2020-06-10 07:40:15',
            'updated_at' => '2020-06-10 07:40:15',
            'user_id' => 1,
            'movie_id' => 3,
        ]);
    }
}
