<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   
    protected $table = 'flight';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'depart','arrive', 'created_at', 'updated_at',
    ];

}