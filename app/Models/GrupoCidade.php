<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoCidade extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'id_campanha',
    ];

    public function campanha() {
        return $this->hasOne(Campanha::class, 'id', 'id_campanha');
    }
}
