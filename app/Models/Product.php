<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
   use HasFactory;
   protected $fillable = [
      'title',
      'slug',
      'summary',
      'description',
      'doc',
      'stock',
      'size',
      'condition',
      'status',
      'price',
      'discount',
      'is_featured',
      'cat_id',
      'child_cat_id',
      'brand_id',

   ];
   public static function check_directory($directory)
   {
      if (!Storage::exists($directory)) {
         Storage::makeDirectory($directory);
      }
      return $directory;
   }

   public function cat_info()
   {
      return $this->hasOne('App\Models\Category', 'id', 'cat_id');
   }
   public function sub_cat_info()
   {
      return $this->hasOne('App\Models\Category', 'id', 'child_cat_id');
   }
   public static function getAllProduct()
   {
      return Product::with(['cat_info', 'sub_cat_info'])->orderBy('id', 'desc')->paginate(10);
   }
   public function rel_prods()
   {
      return $this->hasMany('App\Models\Product', 'cat_id', 'cat_id')->where('status', 'active')->orderBy('id', 'DESC')->limit(8);
   }
   public function getReview()
   {
      return collect([]);
      //  $this->hasMany('App\Models\ProductReview', 'product_id', 'id')->with('user_info')->where('status', 'active')->orderBy('id', 'DESC');
   }

   public static function getProductBySlug($slug)
   {
      return Product::with(['cat_info', 'rel_prods'])->where('slug', $slug)->first();
   }
}
