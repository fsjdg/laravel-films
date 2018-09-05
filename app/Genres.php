<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'film', 'genre'
    ];
}
