<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    use HasFactory;

    protected $table = 'configuration';

    protected $fillable = [
        'logo',
        'title_logo',
        'website_name',
        'title',
        'phone_number',
        'email_address',
        'instagram',
        'youtube',
        'address',
        'map',
        'footer',
        'meta_keywords',
        'meta_descriptions',
    ];
}
