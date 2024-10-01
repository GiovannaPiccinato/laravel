<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['name' , 'numOfPages', 'author_id']; // define o que poderá ser preenchido

    public function author(){
        return $this->belongsTo(Author::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

}
