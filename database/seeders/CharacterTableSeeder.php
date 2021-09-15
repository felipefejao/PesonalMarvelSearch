<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\Comic;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CharacterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Character::factory()->count(10)
            ->create();
    }
}
