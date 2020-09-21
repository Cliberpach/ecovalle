<?php

namespace App\Http\Controllers;
use App\MetodoPago;
use Illuminate\Http\Request;

class MetodoPagoController extends Controller
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
        $metodopago=MetodoPago::where('estado','=','1')->where('nombre','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        return view('metodopago.index',compact('metodopago','buscarpor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
       return view('metodopago.create');
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
          'nombre'=>'required',
          'banco'=>'required',
          'cuenta'=>'required',
          
        ],
        [
           'nombre.required'=>'Ingrese Nombre',
           'banco.required'=>'Ingrese banco',
           'cuenta.required'=>'Ingrese Cuenta',
           
        ],
        
    
    );

        $metodopago=new MetodoPago();
        $metodopago->nombre=$request->nombre;
        $metodopago->banco=$request->banco;
        $metodopago->cuenta=$request->cuenta;
        $metodopago->estado='1';   
        $metodopago->save();
        return redirect()->route('metodopago.index')->with('datos','Registro Completo....!');

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
        $metodopago=MetodoPago::findOrFail($id);
        return view('metodopago.edit',compact('metodopago'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id )
    {
        $data=request()->validate(
            [
              'nombre'=>'required|max:4'
              
            ],
            [
               'nombre.required'=>'Ingrese Nombre',
               'nombre.max'=>'INgrese mas de 4 caracteres'
            ],
        
        );
            
            $metodopago=MetodoPago::findOrFail($id);
            $metodopago->nombre=$request->nombre;
            $metodopago->banco=$request->banco;
            $metodopago->cuenta=$request->cuenta;
            $metodopago->save();
            return redirect()->route('metodopago.index')->with('datos','Registro Completo....!');
    
    
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
        $metodopago=MetodoPago::findOrFail($id);
        return view('metodopago.confirmar',compact('metodopago'));

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
        $metodopago=MetodoPago::findOrFail($id);
        $metodopago->estado='0';
        $metodopago->save();
        return redirect()->route('metodopago.index')->with('datos','Eliminacion Completada....!');


    }
}
