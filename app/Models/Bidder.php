<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidder extends Model
{
    use HasFactory; // 👈 Ensure this is included

    protected $fillable = [
        'last_name',
        'first_name',
        'address',
        'email',
    ];
}
