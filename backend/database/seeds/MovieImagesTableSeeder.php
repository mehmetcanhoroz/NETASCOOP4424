<?php

use Illuminate\Database\Seeder;

class MovieImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\MovieImage::create([
            'id' => 1000,
            'movie_id' => 1000,
            'image'=> ''
        ]);
        \App\Models\MovieImage::create([
            'id' => 1001,
            'movie_id' => 1001,
            'image'=> ''
        ]);
        \App\Models\MovieImage::create([
            'id' => 1002,
            'movie_id' => 1002,
            'image'=> ''
        ]);
        \App\Models\MovieImage::create([
            'id' => 1003,
            'movie_id' => 1003,
            'image'=> ''
        ]);
        \App\Models\MovieImage::create([
            'id' => 1004,
            'movie_id' => 1004,
            'image'=> ''
        ]);
    }
}
