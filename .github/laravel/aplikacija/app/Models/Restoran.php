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
        'slika',
        'geografska_duzina',
        'geografska_sirina',
    ];

    protected $guarded = [
        'id'
    ];

    public function kategorijeJela() {
        return $this->belongsToMany(Kategorija::class, 'restoran_kategorijas');
    }

    public function narudzbine(){         
        return $this->hasMany(Narudzbina::class);     
    }

    public function proizvodi(){         
        return $this->hasMany(Proizvod::class);     
    }
}
