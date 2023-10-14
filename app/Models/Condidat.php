<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condidat extends Model
{
    protected $table = 'condidat';

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'lettreMotivation',
    ];
    protected $rules = [
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'email' => 'required|email|unique:candidatures,email|max:255',
        'lettreMotivation' => 'required|string',
        
    ];
    
}
