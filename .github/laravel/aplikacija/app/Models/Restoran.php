<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restoran extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'naziv',
        'adresa',
        'opis',
        'ocena',
        'email',
    ];

    protected $guarded = [
        'id'
    ];
}
