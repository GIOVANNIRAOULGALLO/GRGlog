<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'author',
        'body',
        'img'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

}
