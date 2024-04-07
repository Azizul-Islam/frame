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
        'sub_heading_en',
        'sub_heading_bn',
        'instruction_en',
        'instruction_bn',
        'instruction_two_en',
        'instruction_two_bn',
        'meta_title',
        'description_en',
        'description_bn',
        'frame_one',
        'frame_two',
        'status',
    ];
}
