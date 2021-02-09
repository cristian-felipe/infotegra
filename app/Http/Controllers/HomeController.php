<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('login');
    }

    public function store(Request $request)
    { 
        $i=0;
        $users = Member::get();     //obtencion de los datos de la base de datos;
        foreach($users as $valor ){
            $a = $valor->id;
            $user = Member::find($a);
            $long = count($users)-1; 
            $i++;
                if($users[$i-1]['Contaseña']==$request['contrasena'] && $users[$i-1]['Codigo']==$request['usuario']){
                    $ocupation =$user->roll;
                    $ocupation= explode(',',$ocupation);
                    $ocupation= explode(':',$ocupation[1]);
                    $ocupation=$ocupation[1];
                    $ocupation = substr($ocupation,1,-1);
                    echo $ocupation;
                    if($ocupation == 'Estudiante'){   //validaciones para ingresar
                        $j=$a;
                    $send = 'students/'. $j;   
                    return redirect($send);              //entrando a dashboard de estudiante
                    }else{
                        return redirect('teacher'); //entrando a dashboard de profesor
                    }
                    
                }
            
        }
        return redirect('Home');     // ingreso invalido volviendo a home
      
    }
   
}
