<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;
     /*
        ২. মডেল রিলেশনশিপ:
    প্রতিটি পোস্টে একটি ক্যাটাগরি থাকবে, এবং প্রতিটি ক্যাটাগরিতে একাধিক পোস্ট থাকতে পারে। তাই সম্পর্কগুলো তৈরি করতে হবে।
    */

    public function category(){
        return $this->hasMany(Category::class);
    }
}
