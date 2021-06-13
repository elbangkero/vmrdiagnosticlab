<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public $timestamps = false;
    protected $table = 'covid_info';
    protected $fillable = [
        'name','age'
      ];
}
