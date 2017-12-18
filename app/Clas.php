<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clas extends Model
{
  protected $table = 'clas';
  protected $fillable = ['materia', 'salon'];

  public function register() {
      return $this->belongsToMany(Register::class,  'clas_id');
  }
}
