<?php

namespace App\Http\Controllers;
use App\Empleado;

use Illuminate\Http\Request;


class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   const PAGINACION=5;

    public function index(Request $request)
    {

        $buscarpor=$request->get('buscarpor');
        $empleado=Empleado::where('estado','=','1')->where('nombre','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        return view('empleado.index',compact('empleado','buscarpor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
       return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=request()->validate(
        [
          'dni'=>'required|max:8|min:8',
          'nombre'=>'required',
          'direccion'=>'required',
          
        ],
        [
           'dni.required'=>'Ingrese Ruc',
           'dni.max'=>'Max 11 numeros',
           'dni.min'=>'Minimo 11 numeros',
           'nombre.required'=>'Ingrese Nombre',
           
           
        ],
        
    
    );

        $empleado=new Empleado();
        $empleado->dni=$request->dni;
        $empleado->nombre=$request->nombre;
        $empleado->direccion=$request->direccion;
        $empleado->movil=$request->movil;
        $empleado->area=$request->area;
        $empleado->sueldo=$request->sueldo;
        $empleado->estado='1';   
        $empleado->save();
        return redirect()->route('empleado.index')->with('datos','Registro Completo....!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado=Empleado::findOrFail($id);
        
        return view('empleado.edit',compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirmar($id)
    {
        //
        $empleado=Empleado::findOrFail($id);
        return view('empleado.confirmar',compact('empleado'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $empleado=Empleado::findOrFail($id);
        $empleado->estado='0';
        $empleado->save();
        return redirect()->route('empleado.index')->with('datos','Eliminacion Completada....!');


    }
    public function update(Request $request, $id)
    {
        $data=request()->validate(
            [
              'dni'=>'required|max:8|min:8',
              'nombre'=>'required',
              'direccion'=>'required',
              
            ],
            [
               'dni.required'=>'Ingrese Ruc',
               'dni.max'=>'Max 11 numeros',
               'dni.min'=>'Minimo 11 numeros',
               'nombre.required'=>'Ingrese Nombre',
               
               
            ],
            
        
        );
    
            $empleado=Empleado::findOrFail($id);
            $empleado->dni=$request->dni;
            $empleado->nombre=$request->nombre;
            $empleado->direccion=$request->direccion;
            $empleado->movil=$request->movil;
            $empleado->area=$request->area;
            $empleado->sueldo=$request->sueldo;
            $empleado->estado='1';   
            $empleado->save();
            return redirect()->route('empleado.index')->with('datos','Registro Completo....!');
    
    }
}
