<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTemp;

class DataTempsController extends Controller
{
  public function index()
  {
      $dataTempmxt= DataTemp::orderBy('Mxt',DESC)->first();
      $dataTempmat= DataTemp::orderBy('Mnt',DESC)->first();
    return[
      "date_mnt"=$dataTempmat,
      "date_mxt"=$dataTempmxt
    ];
  }
}
