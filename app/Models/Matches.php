<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matches extends Model
{
    use HasFactory;

    protected $fillable = [
        'home_team_id', 'away_team_id', 'match_date', 'stadium_id', 'status',
    ];

    public function homeTeam()
    {
        return $this->belongsTo(Teams::class, 'home_team_id');
    }

    public function awayTeam()
    {
        return $this->belongsTo(Teams::class, 'away_team_id');
    }

    public function stadium()
    {
        return $this->belongsTo(Stadiums::class);
    }

    public function tickets()
    {
        return $this->hasMany(Tickets::class);
    }
}