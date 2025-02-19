<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'team';

    protected $fillable  = [
        'name',
        'role',
        'image',
        'github',
        'instagram',
        'linkedin',
        'phone_number',
    ];
}
