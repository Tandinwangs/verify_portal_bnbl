<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GetnewAccountno extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_number',
        'cid',
        'village',
        'gewog',
        'dzongkhag',
        'household_number',
        'thram_number',
        'phone_number',
        'new_account_number',
        'status',
        'file_path'
    ];
    
}
