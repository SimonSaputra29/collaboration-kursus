<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table = 'services';

    protected $fillable = [
        'category_service_id',
        'title',
        'overview',
        'description',
    ];

    public function category()
    {
        return $this->belongsTo(CategoryService::class, 'category_service_id');
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function userProgress()
    {
        return $this->hasMany(UserProgress::class);
    }
}
