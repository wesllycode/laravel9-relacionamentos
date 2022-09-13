<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudOperatorsController extends Controller
{
    public function index(){
        return view('home');
    }

    public function createUser(){
        return view('user');
    }
}
