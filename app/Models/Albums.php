<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Albums extends Model
{
    use HasFactory;
    protected $fillable = ['albumName', 'year', 'genre', 'coverName'];
    //protected $guarded = ['id'];
    public $timestamps = false;
}
