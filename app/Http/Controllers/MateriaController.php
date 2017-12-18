<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Clas;
use App\Register;
use App\User;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $date)
    {

      $registro_materia = new Clas([
        'materia' => $date->get('materia'),
        'salon' => $date->get('salon'),
      ]);
      $registro_materia->save();
      $inscripcion=Clas::all();
      return view('materias.inscripcion', ['inscripcion'=>$inscripcion]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $dates)
    {

      $inscripcion = new Register([
        'clas_id' => $dates->get('clas_id'),
        'user_id' => Auth::User()->id,
      ]);
      $inscripcion->save();

      $todo=Register::where(['user_id' => Auth::User()->id])->orderBy('id','DESC')
      ->join('clas', 'registers.clas_id', '=', 'clas.id')
      ->join('users', 'registers.user_id', '=', 'users.id')
      ->select('registers.*', 'clas.materia', 'users.name')
      ->get();
      return view('materias.registros', ['registros'=>$todo]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $register=Register::where(['id' => $id]) ->first();
      $clas=$register->clas_id;

      $inscripcion=Clas::all();
      return view('materias.editar', ['actual'=>$clas, 'materias'=>$inscripcion, 'id_register'=>$id]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $date)
    {
        $edit = Register::findOrFail( $date->get('id_register'));
        $edit->clas_id=$date->get('clas_id');
        $edit->save();
        return redirect()->route('inscripcion', $date->get('id_register'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $date)
    {
      $edit = Register::findOrFail( $date->get('id_register'));

      $edit->delete();
      return redirect()->route('inscripcion', $date->get('id_register'));
    }
}
