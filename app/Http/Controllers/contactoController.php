<?php

namespace App\Http\Controllers;

use App\Http\Requests;

/*USAMOS FACHADAS */
use Illuminate\Support\Facades\Request;
use App\User;
use Validator;
use App\contact;
use Auth;

class contactoController extends Controller

{

     public function index()
    {

        return view('contacto');
    }


    public function mostrar(){

    	//consulta para mostrar los comentarios de todos los usuarios //
    	// permitir solo al admin poder verlos  es posible que haya que hacer un controlador para el administrador//



    }

/*
almacena el comentario en la base de datos y
manda un email al admin con el comentario del usuario

*/
    public function insertar(Request $request){



					
			/*validamos los campos del formulario con el uso de fachadas */

			$data = $request::all();
			
			$rules = [
			'id_usuario' => 'required',
			'comentario' => 'required',

			];

			$validator = Validator::make($data, $rules);
			if($validator->fails()){
			return redirect()->back()->withErrors($validator->errors())->withInput($request::except('password'));
			}
			/*inserta los datos en caso correcto, si no muestra el formulario con errores */
			$comentario = new contact($data);
			$comentario->save();

      $comentario =  $data['comentario'];
     
			$datos = array(
    
    'contenido' => $comentario,
    
);



       //se envia el array y la vista lo recibe en llaves individuales {{ $email }} , {{ $subject }}...
       \Mail::send('plantillaEmail', $datos ,function($message) use ($request)
       {
       	   $data = $request::all();

           $asunto ="Consulta de un usuario";
			
           //remitente
           $message->from(Auth::user()->email, $data['id_usuario']);
 
           //asunto
           $message->subject($asunto);


 
           //receptor
           $message->to(env('CONTACT_MAIL'), env('CONTACT_NAME'));
 
       });	

			return redirect()->back();


    }
    
}
