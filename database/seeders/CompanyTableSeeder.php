<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = json_decode(file_get_contents(__DIR__ . '/json/company.json'));       
        $data = [];
        foreach($companies as $company)
        {
            array_push($data, [
                'id' => $company->id,
                'name' => $company->name,
                'asn' => $company->asn,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ]);
        }
        DB::table('companies')->insert($data);
    }
}