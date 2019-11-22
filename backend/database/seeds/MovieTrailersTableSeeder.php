<?php

use Illuminate\Database\Seeder;

class MovieTrailersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\MovieTrailer::create([
            'id' => 1000,
            'movie_id' => 1000,
            'src' => 'https://www.youtube.com/embed/2TAOizOnNPo'
        ]);
        \App\Model\MovieTrailer::create([
            'id' => 1001,
            'movie_id' => 1001,
            'src' => 'https://www.youtube.com/embed/ZZGkV_xWGw4'
        ]);
        \App\Model\MovieTrailer::create([
            'id' => 1002,
            'movie_id' => 1002,
            'src' => 'https://www.youtube.com/embed/_o3DMT3sGJ4'
        ]);
        \App\Model\MovieTrailer::create([
            'id' => 1003,
            'movie_id' => 1003,
            'src' => 'https://www.youtube.com/embed/YXZjANEY6bA'
        ]);
        \App\Model\MovieTrailer::create([
            'id' => 1004,
            'movie_id' => 1004,
            'src' => 'https://www.youtube.com/embed/Zd0mg6YkKVA'
        ]);
    }
}
