<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
  protected $table = 'registers';
  protected $fillable = ['user_id', 'clas_id'];

  public function user() {
      return $this->belongsToMany(User::class);
  }
  public function clas() {
      return $this->belongsToMany(Clas::class);
  }
}
