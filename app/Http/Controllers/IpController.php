<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class IpController extends Controller
{
    public function listar(){
        $ips = DB::select('select * from ips');
        dd($ips);
    }
}
