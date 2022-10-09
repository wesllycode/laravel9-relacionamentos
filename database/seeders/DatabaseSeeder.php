<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //$this->call(IpsTableSeeder::class);       
        $this->call([
<<<<<<< HEAD
            IxcUserTableSeeder::class,
            IpTableSeeder::class,
            CompanyTableSeeder::class, 
            IpCompanyTableSeeder::class
=======
            IxcUserTableSeeder::class,            
            IpTableSeeder::class,
            CompanyTableSeeder::class,
            DetailTableSeeder::class,
            
>>>>>>> 115f6ba512bb3f2f7c80061d82804860a035fb31
        ]);      
        
    }
}
