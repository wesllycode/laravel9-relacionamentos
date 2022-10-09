<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IxcUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'cpf',
        'cellphone'
    ];

    public function ipcompanies(){
        return $this->belongsToMany(IpCompany::class,'ip_companies','ixc_user_id',);
    }
}
