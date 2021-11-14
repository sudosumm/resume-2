<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Femail extends Model
{
    use HasFactory;
    protected $table = 'femails';
    protected $fillable = [
        'id',
        'email'
    ];
}
