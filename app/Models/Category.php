<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
   use HasFactory;
   protected $fillable = [
      'title',
      'slug',
      'summary',
      'doc',
      'is_parent',
      'parent_id',
      'added_by',
      'status',

   ];

   public static function check_directory($directory)
   {
      if (!Storage::exists($directory)) {
         Storage::makeDirectory($directory);
      }
      return $directory;
   }

   public function parent(): BelongsTo
   {
      return $this->belongsTo(self::class, 'parent_id', 'id');
   }

   public static function getAllParentWithChild(){
      return Category::with('child_cat')->where('is_parent',1)->where('status','active')->orderBy('title','ASC')->get();
  }
}
