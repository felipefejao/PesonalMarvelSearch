<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    protected $table = 'comics';

    protected $fillable = [
        'name'
    ];

    public function character()
    {
        return $this->belongsTo('App\Models\Character');

    }
}
