<?php

namespace App\Http\Controllers;

use App\Proveedor;

use Illuminate\Http\Request;

class ProveedorController extends Controller
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
        $proveedor=Proveedor::where('estado','=','1')->where('nombre','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        return view('proveedor.index',compact('proveedor','buscarpor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
       return view('proveedor.create');
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
          'ruc'=>'required|max:11|min:11',
          'nombre'=>'required',
          'direccion'=>'required',
          'fonofijo'=>'required'
        ],
        [
           'ruc.required'=>'Ingrese Ruc',
           'ruc.max'=>'Max 11 numeros',
           'ruc.min'=>'Minimo 11 numeros',
           'nombre.required'=>'Ingrese Razon Social',
           'direccion.required'=>'Ingrese Direccion',
           'fonofijo.required'=>'Ingrese Telefono',
        ],
        
    
    );

        $proveedor=new Proveedor();
        $proveedor->ruc=$request->ruc;
        $proveedor->nombre=$request->nombre;
        $proveedor->direccion=$request->direccion;
        $proveedor->fonofijo=$request->fonofijo;
        $proveedor->fonomovil=$request->fonomovil;
        $proveedor->contacto=$request->contacto;
        $proveedor->fonocontacto=$request->fonocontacto;
        $proveedor->emprtras=$request->emprtras;
        $proveedor->direccionemptranps=$request->direccionemptranps;
        $proveedor->estado='1';   
        $proveedor->save();
        return redirect()->route('proveedor.index')->with('datos','Registro Completo....!');

    }

    public function update(Request $request,$id)
    {
        $data=request()->validate(
        [
          'ruc'=>'required|max:11|min:11',
          'nombre'=>'required',
          'direccion'=>'required',
          'fonofijo'=>'required'
        ],
        [
           'ruc.required'=>'Ingrese Ruc',
           'ruc.max'=>'Max 11 numeros',
           'ruc.min'=>'Minimo 11 numeros',
           'nombre.required'=>'Ingrese Razon Social',
           'direccion.required'=>'Ingrese Direccion',
           'fonofijo.required'=>'Ingrese Telefono',
        ],
        
    
    );

        $proveedor=Proveedor::findOrFail($id);
        $proveedor->ruc=$request->ruc;
        $proveedor->nombre=$request->nombre;
        $proveedor->direccion=$request->direccion;
        $proveedor->fonofijo=$request->fonofijo;
        $proveedor->fonomovil=$request->fonomovil;
        $proveedor->contacto=$request->contacto;
        $proveedor->fonocontacto=$request->fonocontacto;
        $proveedor->emprtras=$request->emprtras;
        $proveedor->direccionemptranps=$request->direccionemptranps;
        $proveedor->estado='1';   
        $proveedor->save();
        return redirect()->route('proveedor.index')->with('datos','Registro Completo....!');

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
        $proveedor=Proveedor::findOrFail($id);
        
        return view('proveedor.edit',compact('proveedor'));
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
        $proveedor=Proveedor::findOrFail($id);
        return view('proveedor.confirmar',compact('proveedor'));

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
        $categoria=Proveedor::findOrFail($id);
        $categoria->estado='0';
        $categoria->save();
        return redirect()->route('proveedor.index')->with('datos','Eliminacion Completada....!');


    }
}
