<?php

namespace App\Http\Controllers;
Use App\Linea;
use Illuminate\Http\Request;

class LineaController extends Controller
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
        $linea=Linea::where('estado','=','1')->where('linea','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
       return view('linea.index',compact('linea','buscarpor'));
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('linea.create');
        
    }
        
           public function store(Request $request)
    {
        $data=request()->validate([
          'linea'=>'required|max:100'
        ],
        [
           'linea.required'=>'Ingrese Categoria',
           'linea.max'=>'Maximo 100 caracteres en Nombre'
        ]);

        $linea=new Linea();
        $linea->linea=$request->linea;
        $linea->estado='1';   
        $linea->save();
        return redirect()->route('linea.index')->with('datos','Registro Completo....!');

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
       $linea=Linea::findOrFail($id);
       return view('linea.edit',compact('linea'));
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
            'linea'=>'required|max:40'
          ],
          [
             'linea.required'=>'Ingrese Categoria',
             'linea.max'=>'Maximo 40 caracteres en Nombre'
          ]);
  
          $linea=Linea::findOrFail($id);
          $linea->linea=$request->linea;
          $linea->save();
          return redirect()->route('linea.index')->with('datos','Edicion Completo....!');
  

    }
    public function confirmar($id)
    {
        //
        $linea=Linea::findOrFail($id);
        return view('linea.confirmar',compact('linea'));

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
        $linea=Linea::findOrFail($id);
        $linea->estado='0';
        $linea->save();
        return redirect()->route('linea.index')->with('datos','Eliminacion Completada....!');


    }
}
