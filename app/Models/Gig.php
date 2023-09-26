<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gig extends Model
{
    protected $table = 'gigs';

    protected $fillable = [
        'title',
        'description',
        'orders',
        'price',
        'image',
    ];



    public function scopeSelection($query){
        return $query->select('title','description','orders','price','created_at');
    }
}
