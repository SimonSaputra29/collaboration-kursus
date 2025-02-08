<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhyUs extends Model
{
    use HasFactory;

    protected $table = 'why_us';

    protected $fillable = [
        'title',
        'description',
        'image',
    ];
}
