<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perticipant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'mobile',
        'designation',
        'photo',
        'campaign_id'
    ];
}
