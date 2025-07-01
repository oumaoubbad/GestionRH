<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([EmployeSeeder::class ]);
        $this->call([Responsable_rh_Seeder::class ]);
        // $this->call([CandidatSeeder::class ]);
        $this->call([UserSeeder::class ]);
        $this->call([AnnonceSeeder::class ]);
        $this->call([ReunionSeeder::class ]);









        $this->call([RoleSeeder::class ]);
        $this->call([PermissionSeeder::class ]);



        //lier un user avec un role
        User::find(1)->roles()->attach(1);
        User::find(2)->roles()->attach(2);
        User::find(3)->roles()->attach(2);
        // User::find(4)->roles()->attach(4);



    }
}
