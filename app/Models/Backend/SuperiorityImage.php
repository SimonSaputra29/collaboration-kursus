<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperiorityImage extends Model
{
    use HasFactory;

   protected $table = 'superiority_image';

   protected $fillable = [
    'image',
   ];
}
