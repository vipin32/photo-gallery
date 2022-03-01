<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    use HasFactory;

    protected $fillable = ['album_id', 'photo', 'title', 'description'];

    public function photos(){
        $this->belongsTo('App\Models\Albums');
    }
}
