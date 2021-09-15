<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(CharacterTableSeeder::class);
         $this->call(ComicTableSeeder::class);
         $this->call(EventTableSeeder::class);
         $this->call(SerieTableSeeder::class);
         $this->call(StoryTableSeeder::class);
    }
}
