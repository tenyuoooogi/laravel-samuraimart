<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

 public function product()
 {
    return $this->belongTo('App\Models\Product');
 }

 public function users()
 {
    return $this->belongTo('App\Models\User');
 }
}