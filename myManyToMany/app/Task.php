<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  protected $fillable = [
    'name'
  ];

  public function employees() {  // nome uguale in location?
    return $this->belongsToMany('App\Employee');
  }
}
