<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogIp extends Model
{

    use HasFactory;

    protected $fillable = [
        'id',
        'ixc_user_id',
        'ip_id',
        'company_id',
    ];
  
}
