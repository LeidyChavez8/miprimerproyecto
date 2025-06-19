<?php

namespace Database\Seeders;

use App\Models\User;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user= new User();

        $user->name = 'Leidy chavez';
        $user->email ='leidych08@gmail.com';
        $user->password = bcrypt('ljco');
        $user->save();

         $user= new User();

        $user->name = 'momichis';
        $user->email ='momichis@gmail.com';
        $user->password = bcrypt('momi');
        $user->save();


    }
}
