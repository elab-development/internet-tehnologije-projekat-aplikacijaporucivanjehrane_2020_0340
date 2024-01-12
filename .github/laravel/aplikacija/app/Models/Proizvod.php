<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proizvod extends Model
{
    use HasFactory;

    protected $fillable = [    
        'naziv_proizvoda',
        'cena',
        'opis_proizvoda',
        'kategorija_id',
        'prilozi',
              
    ];

    public function narudzbine() {
        return $this->belongsToMany(Narudzbina::class, 'narudbina_proizvods');
    }

    public function kategorija(){         
        return $this->belongsTo(Kategorija::class);     
    } 
}
