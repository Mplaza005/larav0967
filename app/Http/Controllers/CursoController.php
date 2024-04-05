<?php

namespace App\Http\Controllers;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
       
   public function index(){

      $cursos = Curso::orderBy('id', 'desc')->get();
       return view('curso.listar', compact('cursos'));

  } 


    public function create(){

        return view('curso.create');
    
     }
  
     public function store(Request $request){
  
        $curso= new Curso();
        $curso->name=$request->name;
        $curso->descripcion=$request->descripcion;
        //ADJUNTAR EL PDF
        $file=$request->file("urlPdf");
        $nombreArchivo = "pdf_".time().".".$file->guessExtension();
        $request->file('urlPdf')->storeAs('public/imagenes', $nombreArchivo );
        $curso->urlPdf = $nombreArchivo;
        $curso->save();
        return redirect()->route('curso.index');
  
     }
}
