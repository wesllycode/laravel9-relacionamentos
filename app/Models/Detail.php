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
    
    /* 
       Eu acesso  Detail::find(1)->ixcuser
       Quer dizer, ele vai selecionar o ID 1 do Detail e vai me retornar o dados do ixc_user_id que tem no model IxcUser 
    */

    public function ixcuser(){
        return $this->belongsTo(IxcUser::class,'ixc_user_id','id');
    }

    /* 
       Eu acesso  Detail::find(1)->user
       Quer dizer, ele vai selecionar o ID 1 do Detail e vai me retornar o dados do user_id que tem no model User
    */

    public function user(){
        return $this->belongsTo(User::class, 'user_id','id');
    }
}
