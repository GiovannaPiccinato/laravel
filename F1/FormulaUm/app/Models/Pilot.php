<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pilot extends Model
{
use HasFactory;
    protected $fillable = ['name', 'team_id'];


    public function Team(){
        return $this->belongsTo(Team::class);
    }

    public function Races(){
        return $this->belongsToMany(Race::class);
    }

}
