<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NarudbinaProizvod extends Model
{
    use HasFactory;

    protected $fillable = [         
        'narudzbina_id',
        'proizvod_id',
        'kolicina',           
    ]; 
}
