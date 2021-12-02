<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use GuzzleHttp\Psr7\Request;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        $usu = new User();

        $usu->first_name = 'Admin';
        $usu->last_name = 'Admin';
        $usu->email = 'Admin@gmail.com';
        $usu->password = '1234';
        $usu->role = 'admin';

        $usu->save();

    } 
}
