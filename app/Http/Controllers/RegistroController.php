<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Curso;
use App\Models\registro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistroController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->type !=1) return redirect(route('home'));
        $registros =registro::get();

       //return response()->json($registros);
        return view('registros.show',compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->type !=1) return redirect(route('home'));
        $arreData =Alumno::get();
         $arreDataCursos = Curso::get();

         //return response()->json($arreData);
          return view('registros.create',compact('arreData','arreDataCursos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()->type !=1) return redirect(route('home'));
        $datosRegistro = request()->except('_token');
        registro::insert($datosRegistro);
       // return response()->json($datosRegistro);
        return redirect('registro')->with('mensaje','Matricula  con Exito');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function destroy(registro $registro)
    {
        $registro->delete();
        return back();
    }
}
