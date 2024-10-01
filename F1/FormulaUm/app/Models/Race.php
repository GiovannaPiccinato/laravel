<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'location', 'laps', 'date'];


    public function Pilots(){
        return $this->belongsToMany(Pilot::class);
    }
}
