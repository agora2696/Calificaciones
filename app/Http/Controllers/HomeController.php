<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $collection = Http::get('https://acs-hc-api-production.up.railway.app/api/grupo');
        $collectionGroup = Http::get('https://acs-hc-api-production.up.railway.app/api/grupo')->collect('grupo');
        $groups= [];
        foreach ($collectionGroup as $item => $val){
            $groups =[
                'id' => $collectionGroup['id'],
                'cuatrimestre' => $collectionGroup['cuatrimestre'],
                'grupo' => $collectionGroup['grupo'],
                'descripcion' => $collectionGroup['descripcion']
            ];
        }
        
        return view('pages.dashboard', ['collection'=>$collection['alumnos']], ['grupos'=>$groups]);
    }

    public function show($id)
    {
        $collectionStudents = Http::get('https://acs-hc-api-production.up.railway.app/api/alumno/'.$id)->collect('alumno');
        $students=[];
        foreach($collectionStudents as $item => $val){
            $students=[
                'matricula' => $collectionStudents['matricula'],
                'nombreCompleto' => $collectionStudents['nombreCompleto'],
                'foto' => $collectionStudents['foto']
            ];
        }
        $photos=[];
        foreach($collectionStudents as $item => $val){
            $photos=[
                'foto' => $collectionStudents['foto']
            ];
        }
        //dd($students);
        return view('pages.student', ['estudiantes'=>$students], ['fotos'=>$photos]);
    }
}

