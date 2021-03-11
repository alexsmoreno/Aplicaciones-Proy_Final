<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
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
        $datos['Alumnos'] = Alumno::paginate(20);
        return view('alumnos.mostrar',$datos);
    }

    public function getAlumnos(){
       return  Alumno::get();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datosAlumno = request()->all();
        $datosAlumno = request()->except('_token','Enviar');
        Alumno::insert($datosAlumno);
        return redirect('alumno')->with('mensaje','Alumno Agregado con Exito');
        //return response()->json($datosAlumno);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $alumno =Alumno::findOrFail($id);
        return view('alumnos.edit',compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        \request()->validate([
            'dni' => ['required'],
            'apellidos' => ['required'],
            'nombres' => ['required']
        ]);

        $datosAlumno = request()->except('_token','Enviar','_method');
        Alumno::where('id','=',$id)->update($datosAlumno);
       // return redirect('alumno');
       return redirect('alumno')->with('mensaje','Alumno Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alumno::destroy($id);
        return redirect('alumno')->with('mensaje','Alumno eliminado');
    }




}
