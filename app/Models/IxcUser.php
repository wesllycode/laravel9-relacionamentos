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

    public function detail(){
        return $this->hasOne(Detail::class);
    }

}
