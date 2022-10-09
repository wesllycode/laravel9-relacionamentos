<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'asn'
    ];
    public function ipcompanies(){
        return $this->belongsToMany(IpCompany::class);
    }

    public function ips(){
        return $this->belongsToMany(Ip::class);
    }

    public function ixcusers(){
        return $this->belongsToMany(IxcUser::class);
    }
}
