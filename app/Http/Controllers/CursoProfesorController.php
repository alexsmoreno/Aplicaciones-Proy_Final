<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Curso;
use App\Models\CursoProfesor;
use App\Models\Notas;
use App\Models\Profesor;
use App\Models\registro;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CursoProfesorController extends Controller
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
        #default
        $idProfesor = 0;
        $registros = [];

        #check user profesor
        if (!(Auth::user()->teacher->exists())){
            return redirect(route('home'));
        }

        $Profesor = Profesor::where('user_id',Auth::user()->id)->first();
        $idProfesor = $Profesor->id;

        if (!(is_null($Profesor->cursosProfesores) || !($Profesor->cursosProfesores->curso->exists()))){
            $cursoProfesor = CursoProfesor::where('profesor_id',$Profesor->id)->first();
            $registros = registro::where('curso_id',$cursoProfesor->curso->id)->get();
        }

         return view('cursoProfesor.show',compact('registros','idProfesor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idAlumno = Request('idAlumno');
        $idcurso = Request('idCursoprof');
        $curso = CursoProfesor::where('curso_id',$idcurso)->first();
        $idProfesor = $curso->profesor->id;
        $nota = Notas::where('curso_id',$idcurso)->where('alumno_id',$idAlumno)->first();
       // return response()->json($nota);
       if($nota){
        $nota->nota1 = Request('nota1');
        $nota->nota2 = Request('nota2');
        $nota->nota3 = Request('nota3');
        $nota->nota4 = Request('nota4');
        $nota->curso_id = Request('idCursoprof');
        $nota->alumno_id = Request('idAlumno');
        $nota->profesor_id = $idProfesor;
        $nota->save();
       }else{
           $notas = new Notas();
           $notas->nota1 = Request('nota1');
           $notas->nota2 = Request('nota2');
           $notas->nota3 = Request('nota3');
           $notas->nota4 = Request('nota4');
           $notas->curso_id = Request('idCursoprof');
           $notas->alumno_id = Request('idAlumno');
           $notas->profesor_id = $idProfesor;
           $notas->save();
       }
       return redirect(route('cursoProfesor.index'));
    }

    public function reporte($id){
        $reportes=[];

         $notas = Notas::where('profesor_id',$id)->get();
         //return response()->json($c->alumno->registros->grupo);
         //$grupo = $notas->curso->registros->where('alumno_id',$notas->alumno->id)->first();
         //return response()->json($grupo);
         $estado="";
         foreach ($notas as $c) {
            $grupo = registro::where('alumno_id',$c->alumno_id)->where('curso_id',$c->curso_id)->first();
            $promedio =($c->nota1+$c->nota2+$c->nota3+$c->nota4)/4;
            if($promedio >= 14){
                $estado="APROBADO";
            }else{
                $estado="DESAPROBADO";
            }
           // $time = strtotime($grupo->created_at);
            $reportes[]=
        ['id'=>$c->id,
        'año'=> $grupo->created_at,
        'mes'=> "marzo",
        'docente'=>$c->profesor->user->name,
        'grupo'=>$grupo->grupo,
        'estudiante'=>$c->alumno->NOMBRES." ".$c->alumno->APELLIDOS,
        'nota1'=>$c->nota1,
        'nota2'=>$c->nota2,
        'nota3'=>$c->nota3,
        'nota4'=>$c->nota4,
        'promedio'=>$promedio,
        'estado'=>$estado];
         }
        return view('cursoProfesor.reporte',compact('reportes'));
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
    public function edit($id)
    {
      //  $nota = Notas::where('alumno_id',$id)->first();
        //$alumno =Alumno::findOrFail($id);
      // return response()->json($nota);
     //return view('cursoProfesor.calificar',compact('alumno','nota'));
    }

    public function editar($id){

        $idCurso= Request('idCursoprof');
        $curso = Curso::where('id',$idCurso);
        $nota = Notas::where('alumno_id',$id)->first();
        $alumno =Alumno::findOrFail($id);
        //return response()->json($nota);
        return view('cursoProfesor.calificar',compact('alumno','idCurso','nota'));
    }
}
