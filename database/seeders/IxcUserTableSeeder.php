<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IxcUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ixcusers = json_decode(file_get_contents(__DIR__ . '/json/user_ixc.json'));
        $data =[];
        foreach( $ixcusers as $ixcuser){
            array_push($data,[
                'id' => $ixcuser->id,
                'cpf' => $ixcuser->cpf,
                'cellphone' => $ixcuser->cellphone,                
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ]);
        }
        DB::table('ixc_users')->insert($data);
    }
}
