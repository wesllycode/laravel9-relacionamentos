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

<<<<<<< HEAD
    public function ipcompanies(){
        return $this->belongsToMany(IpCompany::class,'ip_companies','ixc_user_id',);
    }
=======
    public function detail(){
        return $this->belongsTo(Detail::class);
    }

>>>>>>> 115f6ba512bb3f2f7c80061d82804860a035fb31
}
