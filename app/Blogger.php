<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogger extends Model
{
  protected $table="tasks";
  protected $fillable = ['title', 'description',];

}
 
