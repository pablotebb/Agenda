<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Zona_estudio_free;
use App\Http\Requests\Zona_Estudio_FreeRequest;
use Laracasts\Flash\Flash;

class Zona_Estudio_FreesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $estudiofree = Zona_estudio_free::search($request->titulo)->orderBy('id','DESC')->paginate(5);
        return view('admin.zonaestudiogratis.index')->with('estudiofree', $estudiofree);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.zonaestudiogratis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Zona_Estudio_FreeRequest $request)
    {
        $estudiofree = new Zona_estudio_free($request->all());
        $estudiofree->save();
        Flash::success('El apartado de estudio: ' . $estudiofree->titulo .
                       ' ha sido creado con éxito!');
        return redirect()->route('admin.zonaestudiogratis.index');
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
        $estudiofree = Zona_estudio_free::find($id);
        return view('admin.zonaestudiogratis.edit')->with('estudiofree', $estudiofree);
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
        $estudiofree = Zona_estudio_free::find($id);
        $estudiofree->fill($request->all());
        $estudiofree->save();
        Flash::warning('El apartado de estudio: ' .
                       $estudiofree->titulo .
                       ' ha sido editado con éxito!');
        return redirect()->route('admin.zonaestudiogratis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiofree = Zona_estudio_free::find($id);
        $estudiofree->delete();
        Flash::error('El apartado de estudio: ' . $estudiofree->titulo . ' ha sido borrado');
        return redirect()->route('admin.zonaestudiogratis.index');
    }
}
