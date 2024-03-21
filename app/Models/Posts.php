<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Cviebrock\EloquentSluggable\Sluggable;

class Posts extends Model
{
    use HasFactory;
    protected $table = 'posts';
    // protected $guarded = [];

    // use Sluggable;


    // public function Sluggable():array{
    //     return[
    //         'slug'=> [
    //             'source' =>'title'
    //     ]
    //     ];
    // }
}
