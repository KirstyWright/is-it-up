<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public function sites()
    {
        return $this->hasMany('App\Site');
    }
}
