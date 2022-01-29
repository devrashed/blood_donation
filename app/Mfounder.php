<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mfounder extends Model
{
  protected $fillable = [
    'faname',
    'designation',
    'fpicture'
  ];

protected $table = 'Mfounder';
  
}
