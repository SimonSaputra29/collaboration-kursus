<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'question';

    protected $fillable = [
        'service_id',
        'question',
        'option_a',
        'option_b',
        'option_c',
        'option_d',
        'correct_answer'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
