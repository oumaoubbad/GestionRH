<?php

namespace Database\Seeders;

use App\Models\Annonce;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnnonceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Annonce::factory()->count(4)->create();

    }
}
