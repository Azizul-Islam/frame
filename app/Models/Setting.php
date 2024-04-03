<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'company_name',
        'facebook',
        'twitter',
        'instagram',
        'youtube',
        'linkedin',
        'telegram',
    ];
}