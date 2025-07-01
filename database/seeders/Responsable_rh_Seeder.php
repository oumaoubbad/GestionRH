<?php

namespace Database\Seeders;
use App\Models\Responsable_rh;
use Database\Factories\Responsable_rh_Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Responsable_rh_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Responsable_rh::factory()->count(4)->create();
    }
}
