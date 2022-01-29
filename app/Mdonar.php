<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mdonar extends Model
{
    ///use Notifiable;

     protected $fillable = [
    'mid',
    'fullname',
    'address',
    'gender',
    'bgroup',
    'phonenumber',
    'altePhone',
    'district',
    'thanaid',
    'status',
    'lastdate',
  ];

  protected $table = 'mdonar';

 
}
