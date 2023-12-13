<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAccountDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_number',
        'cid',
        'village',
        'gewog',
        'dzongkhag',
        'household_number',
        'thram_no',
        'phone_no',
        'has_claimed'
    ];
}
