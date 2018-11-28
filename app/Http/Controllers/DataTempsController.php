<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTemp;

class DataTempsController extends Controller
{
  public function index()
  {
      $dataTemp= DataTemp::orderBy('Mxt',DESC)->get();
    dd($dataTemp);
  }
}
