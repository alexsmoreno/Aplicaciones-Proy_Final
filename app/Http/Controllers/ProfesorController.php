<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\CursoProfesor;
use App\Models\Profesor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;


class ProfesorController extends Controller
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
        $datos['Profesor'] = Profesor::paginate(20);
        return view('profesores.show',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arreDataCursos = Curso::all();
        return view('profesores.create',compact('arreDataCursos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // return response()->json($request);
       $user = new User();
       $user->name = Request('nombres');
       $user->last_name= Request('apellidos');
       $user->email = Request('email');
       $user->password = Hash::make(Request('password'));
       $user->type = 2;
       $user->save();
       $profe = new Profesor();
       $profe->user_id = $user->id;
       $profe->especialidad = "";
       $profe->save();
        return redirect('profesor')->with('mensaje','Profesor Agregado con Exito');
       //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profesor =Profesor::findOrFail($id);
        $arreDataCursos = Curso::all();
        return view('profesores.edit',compact('profesor','arreDataCursos'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        \request()->validate([
            'nombres' => ['required'],
            'apellidos' => ['required'],
            'especialidad' => ['required'],
            'curso_id' => ['required']
        ]);

        $profesor =Profesor::all()->where('id',$id)->first();
        // return response()->json($profesor);
        $profesor->especialidad =Request('especialidad');
        $profesor->save();
        $profesor->user->name =Request('nombres') ;
        $profesor->user->last_name= Request('apellidos');
        $profesor->user->save();
       // return response()->json($profesor->cursosProfesores);
        if($profesor->cursosProfesores){
            $profesor->cursosProfesores->curso_id = Request('curso_id');
            $profesor->cursosProfesores->profesor_id = $id;
            $profesor->cursosProfesores->save();
        }else{
            $cursoProfesor = new CursoProfesor();
            $cursoProfesor->curso_id = Request('curso_id');
            $cursoProfesor->profesor_id = $id;
            $cursoProfesor->save();
        }
         return redirect('profesor')->with('mensaje','Profesor Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Profesor::destroy($id);
        return redirect('profesor')->with('mensaje','Profesor eliminado');
    }
}
