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
            'id' => 1005,
            'movie_id' => 1000,
            'full_name' => 'John Will',
            'email' => 'john@gmail.com',
            'comment' => 'The body may perhaps compensates for the loss of a true metaphysics.The quick brown fox jumps over the lazy dog.A purple pig and a green donkey flew a kite in the middle of the night and ended up sunburnt.I am counting my calories, yet I really want dessert.The book is in front of the table.Mary plays the piano.The sky is clear; the stars are twinkling.I want to buy a onesie… but know it won’t suit me.This is a Japanese doll.I often see the time 11:11 or 12:34 on clocks.'
        ]);

        \App\Models\Comment::create([
            'id' => 1001,
            'movie_id' => 1001,
            'full_name' => 'Ayse Toptup',
            'email' => 'aysetop@gmail.com',
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer velit sem, tincidunt sed risus non, imperdiet ultrices sem.'
        ]);
        \App\Models\Comment::create([
            'id' => 1006,
            'movie_id' => 1001,
            'full_name' => 'Bill Gates',
            'email' => 'bill@gmail.com',
            'comment' => 'She always speaks to him in a loud voice.How was the math test?Don\'t step on the broken glass.She wrote him a long letter, but he didn\'t read it.She did her best to help him.Christmas is coming.She did not cheat on the test, for it was not the right thing to do.He turned in the research paper on Friday; otherwise, he would have not passed the class.Sixty-Four comes asking for bread.The clock within this blog and the clock on my laptop are 1 hour different from each other.'
        ]);

        \App\Models\Comment::create([
            'id' => 1002,
            'movie_id' => 1002,
            'full_name' => 'Bekir Balik',
            'email' => 'bekirbal@gmail.com',
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer velit sem, tincidunt sed risus non, imperdiet ultrices sem.'
        ]);
        \App\Models\Comment::create([
            'id' => 1007,
            'movie_id' => 1002,
            'full_name' => 'Keanu Reeves',
            'email' => 'keanu@gmail.com',
            'comment' => 'My Mum tries to be cool by saying that she likes all the same things that I do.Abstraction is often one floor above you.Joe made the sugar cookies; Susan decorated them.If you like tuna and tomato sauce- try combining the two. It’s really not as bad as it sounds.A purple pig and a green donkey flew a kite in the middle of the night and ended up sunburnt.Tom got a small piece of pie.Wednesday is hump day, but has anyone asked the camel if he’s happy about it?Italy is my favorite country; in fact, I plan to spend two weeks there next year.If Purple People Eaters are real… where do they find purple people to eat?I really want to go to work, but I am too sick to drive.'
        ]);

        \App\Models\Comment::create([
            'id' => 1003,
            'movie_id' => 1003,
            'full_name' => 'Recep Kacar',
            'email' => 'runrecorun@gmail.com',
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer velit sem, tincidunt sed risus non, imperdiet ultrices sem.'
        ]);
        \App\Models\Comment::create([
            'id' => 1008,
            'movie_id' => 1003,
            'full_name' => 'Paul Walker',
            'email' => 'paul@gmail.com',
            'comment' => 'If one day speed kills me, don’t cry because I was smiling.'
        ]);

        \App\Models\Comment::create([
            'id' => 1004,
            'movie_id' => 1004,
            'full_name' => 'Mehmet Uyu',
            'email' => 'uyumemo@gmail.com',
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer velit sem, tincidunt sed risus non, imperdiet ultrices sem.'
        ]);
        \App\Models\Comment::create([
            'id' => 1009,
            'movie_id' => 1004,
            'full_name' => 'Vin Diesel',
            'email' => 'vindiesel@gmail.com',
            'comment' => 'I live my life a quarter-mile at a time. Nothing else matters; not the mortgage; not the store; not my team and their bullshit. For those 10 seconds or less, I’m free.'
        ]);
    }
}
