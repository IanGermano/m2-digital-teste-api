<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'id_grupo',
    ];

    public function grupoCidade() {
        return $this->hasOne(GrupoCidade::class, 'id', 'id_grupo');
    }

    public function campanha() {
        return $this->hasOneThrough(Campanha::class, GrupoCidade::class,
    			'id',
    			'id',
            	'id_grupo', 
            	'id_campanha');
    }
}
