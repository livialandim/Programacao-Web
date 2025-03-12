<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    
    protected $fillable = ['nome', 'email', 'telefone']; // fillable é herdado da Model
    // SEMPRE atualizar os campos
}
