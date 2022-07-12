<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Novel extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'titulo',
        'nacionalidade',
        'autor',
        'tags',
        'sinopse',
        'imagem',
        'created_at',
        'updated_at'
    ];

    public function chapters() {
        return $this->hasMany(Chapter::class);
    }
}
