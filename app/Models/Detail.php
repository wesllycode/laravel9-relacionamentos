<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'ixc_user_id',       
        'city',
    ];

    public function ixcuser(){
        return $this->hasMany(IxcUser::class);
    }
    
}
