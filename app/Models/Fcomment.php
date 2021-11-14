<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fcomment extends Model
{
    use HasFactory;
    protected $table = 'fcomments';
    protected $fillable = [
        'id',
        'name',
        'email',
        'message'
    ];
}
