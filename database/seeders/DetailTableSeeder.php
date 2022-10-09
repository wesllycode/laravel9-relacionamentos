<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $details = json_decode(file_get_contents(__DIR__.'/json/detail.json'));
        $data = [];
        foreach($details as $detail){
            array_push($data,[
                'id' => $detail->id,
                'ixc_user_id' => $detail->ixc_user_id,
                'user_id' => $detail->user_id,
                'city' => $detail->city,
            ]);
        }
        DB::table('details')->insert($data);
    }
}
