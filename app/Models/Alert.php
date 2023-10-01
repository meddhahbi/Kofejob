<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
    protected $table = 'alerts';

    protected $fillable = [
        'title',
        'subject',
        'description',
        'status',
    ];



    public function scopeSelection($query){
        return $query->select('title','description','subject','status','created_at');
    }
}
