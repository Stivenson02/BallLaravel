<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Clas;
use App\Register;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function show()
    {
        return view('materias.form');
    }
    public function inscripcion()
    {
      $todo=Register::where(['user_id' => Auth::User()->id])->orderBy('id','DESC')
      ->join('clas', 'registers.clas_id', '=', 'clas.id')
      ->join('users', 'registers.user_id', '=', 'users.id')
      ->select('registers.*', 'clas.materia', 'users.name')
      ->get();
      return view('materias.registros', ['registros'=>$todo]);
    }

}
