<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fcontact extends Model
{
    use HasFactory;
    protected $table = 'fcontacts';
    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'subject',
        'message'
    ];
}
