<?php

namespace App\Http\Controllers;
use App\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
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
        $empresa=Empresa::where('estado','=','1')->where('empresa','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        return view('empresa.index',compact('empresa','buscarpor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
       return view('empresa.create');
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
          'empresa'=>'required',
          'direccion'=>'required',
          
        ],
        [
           'ruc.required'=>'Ingrese Ruc',
           'ruc.max'=>'Max 11 numeros',
           'ruc.min'=>'Minimo 11 numeros',
           'empresa.required'=>'Ingrese Nombre',
           
           
        ],
        
    
    );

        $empresa=new Empresa();
        $empresa->ruc=$request->ruc;
        $empresa->empresa=$request->empresa;
        $empresa->direccion=$request->direccion;
        $empresa->fono=$request->fono;
        $empresa->logo=$request->logo;
        $empresa->estado='1';   
        $empresa->save();
        return redirect()->route('empresa.index')->with('datos','Registro Completo....!');

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
        $empresa=Empresa::findOrFail($id);
        
        return view('empresa.edit',compact('empresa'));
    }
    public function update(Request $request,$id )
    {
        $data=request()->validate(
        [
          'ruc'=>'required|max:11|min:11',
          'empresa'=>'required',
          'direccion'=>'required',
          
        ],
        [
           'ruc.required'=>'Ingrese Ruc',
           'ruc.max'=>'Max 11 numeros',
           'ruc.min'=>'Minimo 11 numeros',
           'empresa.required'=>'Ingrese Nombre',
           
           
        ],
        
    
    );

        $empresa=Empresa::findOrFail($id);
        $empresa->ruc=$request->ruc;
        $empresa->empresa=$request->empresa;
        $empresa->direccion=$request->direccion;
        $empresa->fono=$request->fono;
        $empresa->logo=$request->logo;
        $empresa->estado='1';   
        $empresa->save();
        return redirect()->route('empresa.index')->with('datos','Registro Completo....!');

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
        $empresa=Empresa::findOrFail($id);
        return view('empresa.confirmar',compact('empresa'));

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
        $empresa=Empresa::findOrFail($id);
        $empresa->estado='0';
        $empresa->save();
        return redirect()->route('empresa.index')->with('datos','Eliminacion Completada....!');


    }
}
