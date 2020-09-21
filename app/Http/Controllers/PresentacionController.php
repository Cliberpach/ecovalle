<?php

namespace App\Http\Controllers;
Use\App\Presentacion;
use Illuminate\Http\Request;

class PresentacionController extends Controller
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
        $presentacion=Presentacion::where('estado','=','1')->where('presentacion','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
       return view('presentacion.index',compact('presentacion','buscarpor'));
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('presentacion.create');
        
    }
        
    public function store(Request $request)
    {
        $data=request()->validate([
          'presentacion'=>'required|max:100'
        ],
        [
           'presentacion.required'=>'Ingrese Categoria',
           'presentacion.max'=>'Maximo 100 caracteres en Nombre'
        ]);

        $presentacion=new Presentacion();
        $presentacion->presentacion=$request->presentacion;
        $presentacion->estado='1';   
        $presentacion->save();
        return redirect()->route('presentacion.index')->with('datos','Registro Completo....!');

    }

   
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
        //
       $presentacion=Presentacion::findOrFail($id);
       return view('presentacion.edit',compact('presentacion'));
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=request()->validate([
            'presentacion'=>'required|max:40'
          ],
          [
             'presentacion.required'=>'Ingrese Categoria',
             'presentacion.max'=>'Maximo 40 caracteres en Nombre'
          ]);
  
          $presentacion=Presentacion::findOrFail($id);
          $presentacion->presentacion=$request->presentacion;
          $presentacion->save();
          return redirect()->route('presentacion.index')->with('datos','Edicion Completo....!');
  

    }
    public function confirmar($id)
    {
        //
        $presentacion=Presentacion::findOrFail($id);
        return view('presentacion.confirmar',compact('presentacion'));

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
        $presentacion=Presentacion::findOrFail($id);
        $presentacion->estado='0';
        $presentacion->save();
        return redirect()->route('presentacion.index')->with('datos','Eliminacion Completada....!');


    }
}
