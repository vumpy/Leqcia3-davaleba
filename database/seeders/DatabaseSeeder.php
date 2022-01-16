<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            'name' => 'The War on Drugs - "Red Eyes" (Official Video)',
            'description' => 'The War On Drugs Lost In The Dream out now on Secretly Canadian',
            'length' => '4:57',
            'uploaded_by' => 'The War On Drugs',
            'img' => 'https://i.ytimg.com/vi/1LmX5c7HoUw/hq720.jpg?sqp=-oaymwEjCOgCEMoBSFryq4qpAxUIARUAAAAAGAElAADIQj0AgKJDeAE=&rs=AOn4CLARLeurbpGSWI1QgZbA5fgAlRJhaQ',
        ]);


        DB::table('videos')->insert([
            'name' => 'Nirvana - Smells Like Teen Spirit (Official Music Video)',
            'description' => 'Official Music Video for Smells Like Teen Spirit performed by Nirvana.',
            'length' => '4:38',
            'uploaded_by' => 'Nirvana',
            'img' => 'https://i.ytimg.com/vi/hTWKbfoikeg/hq720.jpg?sqp=-oaymwEjCOgCEMoBSFryq4qpAxUIARUAAAAAGAElAADIQj0AgKJDeAE=&rs=AOn4CLB85riuAoWeGyky5db-K8eA7VvsGQ',
        ]);

        DB::table('videos')->insert([
            'name' => 'Slowdive - Sugar for the pill',
            'description' => 'Sugar for the Pill From Slowdive, out may 5th on Dead Oceans Buy.',
            'length' => '4:32',
            'uploaded_by' => 'SwlodiveVEVO',
            'img' => 'https://i.ytimg.com/vi/BxwAPBxc0lU/hq720.jpg?sqp=-oaymwEjCOgCEMoBSFryq4qpAxUIARUAAAAAGAElAADIQj0AgKJDeAE=&rs=AOn4CLCmC17k1G7Cuv38RuXN9J105zrzaw',
        ]);

        DB::table('videos')->insert([
            'name' => 'King Gizzard & the Lizard Wizard - Am I In Heaven',
            'description' => 'AM I In Heaven by King Gizzard and the Lizard Wizard.',
            'length' => '7:06',
            'uploaded_by' => 'King Gizzard And The Lizard Wizard',
            'img' => 'https://i.ytimg.com/vi/jDf4lju69LY/hq720.jpg?sqp=-oaymwEjCOgCEMoBSFryq4qpAxUIARUAAAAAGAElAADIQj0AgKJDeAE=&rs=AOn4CLDvvuTIjxGs1eBI7rb_Dbarenlajw',
        ]);

        DB::table('videos')->insert([
            'name' => 'Brand New - Sowing Season',
            'description' => 'Track #1 Song: Sowing Season Album: The Devil and God are raging inside of me Artist: Brand New.',
            'length' => '4:33',
            'uploaded_by' => 'BrandNewMusicCentral',
            'img' => 'https://i.ytimg.com/vi/fSX13jgRxI4/hq720.jpg?sqp=-oaymwEjCOgCEMoBSFryq4qpAxUIARUAAAAAGAElAADIQj0AgKJDeAE=&rs=AOn4CLA0KqWH-GP59pQHVdGBmU7mt72k3w',
        ]);
    }
}
