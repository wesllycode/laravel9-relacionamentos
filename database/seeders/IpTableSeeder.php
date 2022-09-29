<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IpTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ips = json_decode(file_get_contents(__DIR__ . '/json/ip.json'));
        $data = [];
        foreach( $ips as $ip){
            array_push($data,[
                'id' => $ip->id,
                'ip' => $ip->ip,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ]);
        }
        DB::table('ips')->insert($data);
    }
}
