<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'password',
        'user1',
        'user2'
        // Add more attributes as needed
    ];
}
