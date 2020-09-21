<?php

namespace App\Http\Controllers;
use App\OrigenDocumento;
use Illuminate\Http\Request;

class OrigenDocumentoController extends Controller
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
        $origen=OrigenDocumento::where('estado','=','1')->where('origen','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
       return view('origen.index',compact('origen','buscarpor'));
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('origen.create');
        
    }
        
           public function store(Request $request)
    {
        $data=request()->validate([
          'origen'=>'required|max:50'
        ],
        [
           'origen.required'=>'Ingrese Origen',
           'origen.max'=>'Maximo 50 caracteres en Nombre'
        ]);

        $origen=new OrigenDocumento();
        $origen->origen=$request->origen;
        $origen->estado='1';   
        $origen->save();
        return redirect()->route('origen.index')->with('datos','Registro Completo....!');

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
       $origen=OrigenDocumento::findOrFail($id);
       return view('origen.edit',compact('origen'));
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
            'origen'=>'required|max:40'
          ],
          [
             'origen.required'=>'Ingrese origen',
             'origen.max'=>'Maximo 40 caracteres en Nombre'
          ]);
  
          $origen=OrigenDocumento::findOrFail($id);
          $origen->origen=$request->origen;
          $origen->save();
          return redirect()->route('origen.index')->with('datos','Edicion Completo....!');
  

    }
    public function confirmar($id)
    {
        //
        $origen=OrigenDocumento::findOrFail($id);
        return view('origen.confirmar',compact('origen'));

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
        $origen=OrigenDocumento::findOrFail($id);
        $origen->estado='0';
        $origen->save();
        return redirect()->route('origen.index')->with('datos','Eliminacion Completada....!');


    }
}
