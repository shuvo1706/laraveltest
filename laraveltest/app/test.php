<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class test extends Model
{
  public $timestamps = false;
  protected $table="test";

    protected $fillable=['first_name','last_name','email','password'];
}
