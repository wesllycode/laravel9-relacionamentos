<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class IpController extends Controller
{
    public function listar(){
        //  Modo um de usar
        //  $ips = DB::select('select * from ips WHERE id = ?', [1]);
        
        // Outro forma de usar, para puxar os dados e exibir no site
        //$id = 1;
        //$ips = DB::table('ips')->where('id',$id)->get();
        return $ips;
    }
}
