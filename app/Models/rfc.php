<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rfc extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading', 'file'
    ];
}
