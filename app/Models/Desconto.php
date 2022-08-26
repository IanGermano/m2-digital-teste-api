<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desconto extends Model
{
    use HasFactory;

    protected $fillable = [
        'valor',
        'id_campanha',
        'id_produto',
    ];

    public function campanha() {
        return $this->hasOne(Campanha::class, 'id', 'id_campanha');
    }

    public function produto() {
        return $this->hasOne(Produto::class, 'id', 'id_produto');
    }
}
