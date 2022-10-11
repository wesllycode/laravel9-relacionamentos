<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailCompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detailcompanies = json_decode(file_get_contents(__DIR__ . '/json/detailcompany.json'));

        foreach ($detailcompanies as $detailcompany) {
            $data = [
                'id' => $detailcompany->id,
                'company_id' => $detailcompany->company_id,
                'state' => $detailcompany->state,
                'city' => $detailcompany->city,
                'district' => $detailcompany->district,
                'street' => $detailcompany->cep,
                'cellphone' => $detailcompany->cellphone
            ];
        }
        DB::table('detail_companies')->insert($data);
    }
}
