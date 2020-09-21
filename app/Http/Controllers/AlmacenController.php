<?php

namespace App\Http\Controllers;
use App\Almacen;
use Illuminate\Http\Request;

class AlmacenController extends Controller
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
        $almacen=Almacen::where('estado','=','1')->where('almacen','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
       return view('almacen.index',compact('almacen','buscarpor'));
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('almacen.create');
        
    }
        
           public function store(Request $request)
    {
        $data=request()->validate([
          'almacen'=>'required|max:120'
        ],
        [
           'almacen.required'=>'Ingrese almacen',
           'almacen.max'=>'Maximo 120 caracteres en Nombre'
        ]);

        $almacen=new Almacen();
        $almacen->almacen=$request->almacen;
        $almacen->ubicacion=$request->ubicacion;
        $almacen->estado='1';   
        $almacen->save();
        return redirect()->route('almacen.index')->with('datos','Registro Completo....!');

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
       $almacen=Almacen::findOrFail($id);
       return view('almacen.edit',compact('almacen'));
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
            'almacen'=>'required|max:40'
          ],
          [
             'almacen.required'=>'Ingrese almacen',
             'almacen.max'=>'Maximo 40 caracteres en Nombre'
          ]);
  
          $almacen=Almacen::findOrFail($id);
          $almacen->almacen=$request->almacen;
          $almacen->ubicacion=$request->ubicacion;
          $almacen->save();
          return redirect()->route('almacen.index')->with('datos','Edicion Completo....!');
  

    }
    public function confirmar($id)
    {
        //
        $almacen=Almacen::findOrFail($id);
        return view('almacen.confirmar',compact('almacen'));

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
        $almacen=Almacen::findOrFail($id);
        $almacen->estado='0';
        $almacen->save();
        return redirect()->route('almacen.index')->with('datos','Eliminacion Completada....!');


    }
}
