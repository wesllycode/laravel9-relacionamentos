<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class IpCompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ipcompanies = json_decode(file_get_contents(__DIR__ . '/json/ipcompany.json'));
        $data = [];
        foreach($ipcompanies as $ipcom){
            array_push($data,[
                'id'=> $ipcom->id,
                'ixc_user_id'=> $ipcom->ixc_user_id,
                'ip_id'=> $ipcom->ip_id,
                'company_id'=> $ipcom->company_id,
                'created_at'=> date('Y-m-d h:i:s'),
                'updated_at'=> date('Y-m-d h:i:s'),
            ]);                     
        }
        DB::table('ip_companies')->insert($data); 
    }
}
