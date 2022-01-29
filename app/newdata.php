<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newdata extends Model
{
    //
   protected $fillable = [
    'fullname',
    'address',
    'gender',
    
   ];

  protected $table = 'Mdonar'; 
}
