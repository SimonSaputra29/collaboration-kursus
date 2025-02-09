<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurProgram extends Model
{
    use HasFactory;

    protected $table = 'our_program';

    protected $fillable = [
        'title',
        'overview',
        'image',
        'link',
    ];
}
