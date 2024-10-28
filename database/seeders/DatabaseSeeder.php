<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        {
            //inserting multiple users
            //Step 1: create the array of users
            $users = [
            [
            'First_name' => 'System Admin',
            'Last_name' => 'System Admin',
            'email' => 'admin@helpFootballGrow.com',
            'password' => Hash::make('Qwerty1.'),
            'user_type' => 'Administrator',
            'phone' => '0708608008',
            'location' => 'Nairobi'
            ],
            [
            'first_name' => 'Nelson',
            'last_name' => 'Muhia',
            'email' => 'Nelmuhia@HelpFootballGrow.com',
            'password' => Hash::make('Qwerty1.'),
            'user_type' => 'Employee',
            'phone' => '0708608008',
            'location' => 'Nairobi',
            ],
            [
            'first_name' => 'Jane',
            'last_name' => 'Doe',
            'phone' => '0708608070',
            'user_type' => 'Employee',
            'email' => 'janedoe@HelpFootballGrow.com',
            'password' => Hash::make('Qwerty1.'),
            'location' => 'Kiambu',
            
            
            
            ]
            ];
            //Step 2: insert the array using Query Builder
            DB::table('users')->insert($users);
            //call other seeders to insert records into the DB
            $this->call([
            CatalogSeeder::class
            ]);
        };
    }
}
