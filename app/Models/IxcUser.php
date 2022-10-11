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


    /* 
       Eu acesso  IxcUser::find(1)->detail
       Quer dizer, ele vai selecionar o ID 1 do IxcUser e vai me retornar os dados que tem no Detail  pertecente ixc_user_id
    */
    public function detail(){
        return $this->hasOne(Detail::class);
    }

}
