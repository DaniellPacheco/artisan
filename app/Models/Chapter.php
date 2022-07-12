<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'novel_id',
        'titulo',
        'capitulo',
        'conteudo'
    ];

    public function novels() {
        return $this->belongsTo(Novel::class);
    }
}
