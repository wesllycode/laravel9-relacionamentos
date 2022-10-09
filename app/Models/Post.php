<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'content'
    ];

    public function categories(){
        return $this->belongsToMany(category::class,'post_category','post_id','category_id');
    }
}
