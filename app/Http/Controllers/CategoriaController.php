<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
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
        $categoria=Categoria::where('estado','=','1')->where('categoria','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
       return view('categoria.index',compact('categoria','buscarpor'));
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('categoria.create');
        
    }
        
           public function store(Request $request)
    {
        $data=request()->validate([
          'categoria'=>'required|max:120'
        ],
        [
           'categoria.required'=>'Ingrese Categoria',
           'categoria.max'=>'Maximo 120 caracteres en Nombre'
        ]);

        $categoria=new Categoria();
        $categoria->categoria=$request->categoria;
        $categoria->estado='1';   
        $categoria->save();
        return redirect()->route('categoria.index')->with('datos','Registro Completo....!');

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
       $categoria=Categoria::findOrFail($id);
       return view('categoria.edit',compact('categoria'));
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
            'categoria'=>'required|max:40'
          ],
          [
             'categoria.required'=>'Ingrese Categoria',
             'categoria.max'=>'Maximo 40 caracteres en Nombre'
          ]);
  
          $categoria=Categoria::findOrFail($id);
          $categoria->categoria=$request->categoria;
          $categoria->save();
          return redirect()->route('categoria.index')->with('datos','Edicion Completo....!');
  

    }
    public function confirmar($id)
    {
        //
        $categoria=Categoria::findOrFail($id);
        return view('categoria.confirmar',compact('categoria'));

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
        $categoria=Categoria::findOrFail($id);
        $categoria->estado='0';
        $categoria->save();
        return redirect()->route('categoria.index')->with('datos','Eliminacion Completada....!');


    }
}
