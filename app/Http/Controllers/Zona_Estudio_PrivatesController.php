<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Zona_estudio_private;
use App\Http\Requests\Zona_Estudio_PrivateRequest;
use Laracasts\Flash\Flash;

class Zona_Estudio_PrivatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $estudioprivate = Zona_estudio_private::search($request->titulo)->orderBy('id','DESC')->paginate(5);
        return view('admin.zonaestudiopago.index')->with('estudioprivate', $estudioprivate);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.zonaestudiopago.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Zona_Estudio_PrivateRequest $request)
    {
        $estudioprivate = new Zona_estudio_private($request->all());
        $estudioprivate->save();
        Flash::success('El apartado de estudio (de pago): ' . $estudioprivate->titulo .
                       ' ha sido creado con éxito!');
        return redirect()->route('admin.zonaestudiopago.index');
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
        $estudioprivate = Zona_estudio_private::find($id);
        return view('admin.zonaestudiopago.edit')->with('estudioprivate', $estudioprivate);
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
        $estudioprivate = Zona_estudio_private::find($id);
        $estudioprivate->fill($request->all());
        $estudioprivate->save();
        Flash::warning('El apartado de estudio (de pago): ' .
                       $estudioprivate->titulo .
                       ' ha sido editado con éxito!');
        return redirect()->route('admin.zonaestudiopago.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudioprivate = Zona_estudio_private::find($id);
        $estudioprivate->delete();
        Flash::error('El apartado de estudio (de pago): ' . $estudioprivate->titulo . ' ha sido borrado');
        return redirect()->route('admin.zonaestudiopago.index');
    }
}
