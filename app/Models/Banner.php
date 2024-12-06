<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Banner extends Model
{
    use HasFactory;
    protected $fillable=[
     'title',
     'slug',
     'description',
     'doc',
     'status'

    ];

    public static function check_directory($directory){
         if(!Storage::exists($directory)){
            Storage::makeDirectory($directory);
         }
         return $directory;
    }
}
