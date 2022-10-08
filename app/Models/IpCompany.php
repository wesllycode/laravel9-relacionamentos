<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IpCompany extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'ixc_user_id',
        'ip_id',        
    ];


    public function ips{
        return $this->belongsToMany(Ip::class);
    }
}
