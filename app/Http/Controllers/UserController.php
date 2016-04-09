<?php

namespace App\Http\Controllers;

/*para usar las validaciones de forma estática */

use Illuminate\Support\Facades\Validator;
/*USAMOS FACHADAS */
use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    

		 public function index()
    {

        return view('home');
    }


    public function insertar(Request $request){


        $data = $request::all();

			$rules = [
			'name' => 'required',
			'email' => 'required',
			'password' => 'confirmed', // busca un campo con _confirmation y lo compara //
			'direccion' => 'required',
			'apellidos' => 'required',


			];



			 $validator = Validator::make($data, $rules);
			if($validator->fails()){
			return redirect()->back()->withErrors($validator->errors())->withInput($request::except('password'));
			}
			/*inserta los datos en caso correcto, si no muestra el formulario con errores */
				$user = new User($data);
				$user->save();


			$correo=$data['email'];

			$datos = array(
    
    		'correo' => $correo,
    
);

    	 //se envia el array y la vista lo recibe en llaves individuales {{ $email }} , {{ $subject }}...
       \Mail::send('emailRegistro', $datos ,function($message) use ($request)
       {


       	   $data = $request::all();

           $asunto ="Mensaje de bienvenida";
			
           //remitente
           $message->from('belaklord@gmail.com', 'Antonio Luis');
 
           //asunto
           $message->subject($asunto);


 
           //receptor
           $message->to($data['email'], env('CONTACT_NAME'));
 
       });	

			return view('vistaEmail');


    }



}



