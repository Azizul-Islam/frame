<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable = [
        'heading_en',
        'heading_bn',
        'meta_title',
        'description_en',
        'description_bn',
        'frame_one',
        'frame_two',
        'status',
    ];
}
