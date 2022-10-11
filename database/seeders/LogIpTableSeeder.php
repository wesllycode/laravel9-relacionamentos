<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class LogIpTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $logips = json_decode(file_get_contents(__DIR__ . '/json/logip.json'));
        $data = [];
        foreach($logips as $logip){
            array_push($data,[
                'id'=> $logip->id,
                'ixc_user_id'=> $logip->ixc_user_id,
                'ip_id'=> $logip->ip_id,
                'company_id'=> $logip->company_id,
                'created_at'=> date('Y-m-d h:i:s'),
                'updated_at'=> date('Y-m-d h:i:s'),
            ]);                     
        }
        DB::table('log_ips')->insert($data); 
    }
}
