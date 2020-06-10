<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('movies')->insert([
            'title' => 'Joker',
            'year' => 2019,
            'description' => 'In Gotham City, mentally-troubled comedian Arthur Fleck is disregarded and mistreated by society. He then embarks on a downward spiral of revolution and bloody crime. This path brings him face-to-face with his alter-ego',
            'created_at' => '2020-06-10 07:40:15',
            'updated_at' => '2020-06-10 07:40:15',
            
        ]);

        DB::table('movies')->insert([
            'title' => 'Avengers:Endgame',
            'year' => 2019,
            'description' => 'After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to undo Thanos actions and restore order to the universe.',
            'created_at' => '2020-06-10 07:40:15',
            'updated_at' => '2020-06-10 07:40:15',
            
        ]);
        DB::table('movies')->insert([
            'title' => 'The Lighthouse',
            'year' => 2019,
            'description' => 'Two lighthouse keepers try to maintain their sanity while living on a remote and mysterious New England island in the 1890s',
            'created_at' => '2020-06-10 07:40:15',
            'updated_at' => '2020-06-10 07:40:15',
            
        ]);
    }
}
