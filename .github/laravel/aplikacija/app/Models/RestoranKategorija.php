<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestoranKategorija extends Model
{
    use HasFactory;

    protected $fillable = [
        'restoran_id',
        'kategorija_id',
    ];
}
