<?php

namespace App\Http\Controllers;

use App\Models\CursoProfesor;
use App\Models\Profesor;
use App\Models\registro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CursoProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$registros =CursoProfesor::get();
      
        $idCurso = Auth::user()->teacher->cursosProfesores->curso->id;
        $idProfesor = Profesor::where('user_id',Auth::user()->id)->first();
        $cursoProfesor = CursoProfesor::where('profesor_id',$idProfesor->id)->first();
        $registros = registro::where('curso_id',$cursoProfesor->curso->id)->get();
        //return response()->json($registros);
         return view('cursoProfesor.show',compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CursoProfesor  $cursoProfesor
     * @return \Illuminate\Http\Response
     */
    public function show(CursoProfesor $cursoProfesor)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CursoProfesor  $cursoProfesor
     * @return \Illuminate\Http\Response
     */
    public function edit(CursoProfesor $cursoProfesor)
    {
        return view('cursoProfesor.calificar');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CursoProfesor  $cursoProfesor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CursoProfesor $cursoProfesor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CursoProfesor  $cursoProfesor
     * @return \Illuminate\Http\Response
     */
    public function destroy(CursoProfesor $cursoProfesor)
    {
        //
    }
}
