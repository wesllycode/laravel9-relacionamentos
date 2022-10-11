<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailCompany extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'company_id',
        'state',
        'city,',
        'distric',
        'street',
        'cep',
        'cellphone'        
    ];
}
