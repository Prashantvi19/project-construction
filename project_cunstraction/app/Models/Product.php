<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product_table';

    protected $fillable = [
        'client_name',
        'number',
        'email',
        'location',
        'area',
        'date',
        'project_image',
        'project_description',
        'created_at',

    ];
}
