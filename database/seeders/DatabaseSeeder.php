<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
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
        User::factory(5)->create();

        //$this->call(IpsTableSeeder::class);       
        $this->call([
            IxcUserTableSeeder::class,
            IpTableSeeder::class,
            CompanyTableSeeder::class, 
            DetailCompanyTableSeeder::class,
            DetailTableSeeder::class,  
            LogIpTableSeeder::class,   
        ]);      
        
    }
}