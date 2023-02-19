<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content'
    ];
//    protected $attributes = [
//        'content'=>'The best desktop apps for learning laravel'
//    ];
    public function getPostDate(){
        return Carbon::parse($this->created_at)->diffForHumans();
    }



}
