<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogicaMatrizController extends Controller{

   public function crearMatriz(Request $request){
   	$name=$request->input('nombre');
   	$apellido=$request->input('apellido');
   	$edad=$request->input('edad');
   	$sexo=$request->input('sexo');
   	$telefono=$request->input('telefono');
   	$direccion=$request->input('direccion');

   	$matriz=[
   		['nombre'=>'camilo',
   		'apellido'=>'vargas',
   		'edad'=> 21,
   		'sexo'=>'masculinio',
   		'telefono'=>'3214031564',
   		'direccion'=>'cr 1 bis #2'],
   		['nombre'=>'felipe',
   		'apellido'=>'vargas',
   		'edad'=> 21,
   		'sexo'=>'masculinio',
   		'telefono'=>'3214031564',
   		'direccion'=>'cr 1 bis #2'],
   	];
   	/*foreach ($matriz as $value) {
   		echo $value['nombre']." ".$value['apellido']."<br>";
   	}*/
   	foreach ($matriz as $key => $name) {
   		echo $key['nombre']." ".$key['apellido']."<br>";
   	}
  }
}