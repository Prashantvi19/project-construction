<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services_table';
    protected $fillable = [
        'title',
        'number',
        'date',
        'service_image',
        'sort_description',
        'created_at',
    ];
}
