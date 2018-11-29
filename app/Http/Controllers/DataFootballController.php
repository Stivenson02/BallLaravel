<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataFootbal;

class DataFootballController extends Controller
{
    public function diferentGoal(){
      $info=array();
      $allData=DataFootball::all();
      foreach ($allData as $value) {
        array_push($info,$value->F - $value->A);
      }
      
    }

}
