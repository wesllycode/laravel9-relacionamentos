<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ip extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip'
    ];

    public function ipcompanies(){
        return $this->belongsToMany(IpCompany::class);
    }

    public function ixcusers(){
        return $this->belongsToMany(IxcUser::class);
    }
}
