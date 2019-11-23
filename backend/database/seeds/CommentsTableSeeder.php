<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Comment::create([
            'id' => 1000,
            'movie_id' => 1000,
            'full_name' => 'Ali Atabak',
            'email' => 'aliat@gmail.com',
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer velit sem, tincidunt sed risus non, imperdiet ultrices sem.'
        ]);
        \App\Models\Comment::create([
            'id' => 1001,
            'movie_id' => 1001,
            'full_name' => 'Ayse Toptup',
            'email' => 'aysetop@gmail.com',
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer velit sem, tincidunt sed risus non, imperdiet ultrices sem.'
        ]);
        \App\Models\Comment::create([
            'id' => 1002,
            'movie_id' => 1002,
            'full_name' => 'Bekir Balik',
            'email' => 'bekirbal@gmail.com',
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer velit sem, tincidunt sed risus non, imperdiet ultrices sem.'
        ]);
        \App\Models\Comment::create([
            'id' => 1003,
            'movie_id' => 1003,
            'full_name' => 'Recep Kacar',
            'email' => 'runrecorun@gmail.com',
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer velit sem, tincidunt sed risus non, imperdiet ultrices sem.'
        ]);
        \App\Models\Comment::create([
            'id' => 1004,
            'movie_id' => 1004,
            'full_name' => 'Mehmet Uyu',
            'email' => 'uyumemo@gmail.com',
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer velit sem, tincidunt sed risus non, imperdiet ultrices sem.'
        ]);
    }
}
