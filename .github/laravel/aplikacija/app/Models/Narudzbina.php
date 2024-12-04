<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Narudzbina extends Model
{
    use HasFactory;

    protected $fillable = [         
        'user_id',         
        'restoran_id',         
        'napomena',
        'status',            
    ]; 

    public function user(){         
        return $this->belongsTo(User::class);     
    }     
    
    public function restorani(){        
         return $this->belongsTo(Restoran::class);     
    }     
   
    public function proizvodi() {
        return $this->belongsToMany(Proizvod::class, 'narudbina_proizvods');
    }
}
