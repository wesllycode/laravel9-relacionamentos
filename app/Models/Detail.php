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
        'user_id',   
        'city',
    ]; 
    
    public function ixcuser(){
        return $this->belongsTo(IxcUser::class,'ixc_user_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id','id');
    }
}
