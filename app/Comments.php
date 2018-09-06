<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user', 'film', 'comment'
    ];

    public function users() {
        return $this->belongsTo('App\User', 'id');
    }
}
