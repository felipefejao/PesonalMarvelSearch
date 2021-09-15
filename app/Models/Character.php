<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $table = 'characters';

    protected $fillable = [
        'name',
        'dt_nasc'
    ];

    public function story()
    {
        return $this->hasMany(Story::class);
    }


    public function comic()
    {
        return $this->hasMany(Comic::class);
    }

    public function serie()
    {
        return $this->hasMany(Serie::class);
    }

    public function event()
    {
        return $this->hasMany(Event::class);
    }
}
