<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;
    protected $primaryKey = 'idNoticia';
    protected $fillable = ['titulo', 'noticia', 'data', 'horario'];
}
