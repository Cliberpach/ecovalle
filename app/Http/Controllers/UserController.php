<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function login(Request $request)
   {
     $data=request()->validate([
            'name'=>'required',
            'password'=>'required'

     ],
     [
        'name.required'=>'Ingrese Usuario',
        'password.required'=>'Ingrese Contraseña',
     
     ]);
      
     if(Auth::attempt($data));
     
     $name=$request->get('name');  
    
     $query=User::where('name','=',$name)->get();
     
     /*$query=User::all();*/
    

     if ($query->count() !=0)
       {
         $hashp=$query[0]->password;
         $password=$request->get('password');
         if(password_verify($password,$hashp))
                {
                    return view('bienvenido');
                    
                }
                else
                {
                    return back()->witherrors(['password'=>'Contraseña no Valida'])->withInput([request('password')]);
                    
                }
       } 

       else
       {
        return back()->witherrors(['name'=>'usuario no Valida'])->withInput([request('name')]);
       }
    
    } 

    public function trabajando()
    {
        //
        return view('bienvenido');
        
    }
       

}
