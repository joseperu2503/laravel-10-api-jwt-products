<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerifyCode extends Model
{
    use HasFactory;
    protected $table = 'verify_codes';
    protected $fillable = [
        'user_id',
        'code',
        'uuid',
        'is_verified',
        'expiration_date',
    ];
}
