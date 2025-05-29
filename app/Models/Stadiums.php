<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stadiums extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'location', 'capacity',
    ];

    public function matches()
    {
        return $this->hasMany(Matches::class);
    }
}