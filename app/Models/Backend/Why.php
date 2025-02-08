<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Why extends Model
{
    use HasFactory;

    protected $table = 'why';

    protected $fillable = [
        'title',
        'description',
    ];
}
