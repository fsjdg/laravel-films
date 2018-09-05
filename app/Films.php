<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Films extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'release_date', 'rating',
        'ticket_price', 'country', 'photo', 'slug'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'country'
    ];

    function comments() {
        $this->hasMany(Comments::class);
    }

    function country() {
        $this->hasOne(Countries::class);
    }

    function genres() {
        $this->hasMany(App\Genres);
    }
}
