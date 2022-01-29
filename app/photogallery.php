<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photogallery extends Model
{
    protected $fillable = [
    'photocaption',
    'eventpic'
   ];

protected $table = 'photogallery';

}
