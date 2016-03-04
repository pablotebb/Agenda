<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Proyecto;
use App\Http\Requests\ProyectoRequest;
use Laracasts\Flash\Flash;

class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyecto = Proyecto::search($request->titulo)->orderBy('id','DESC')->paginate(5);
        return view('admin.proyecto.index')->with('proyecto', $proyecto);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.proyectos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProyectoRequest $request)
    {
        $Proyecto = new Proyecto($request->all());
        $Proyecto->save();
        Flash::success('El proyecto: ' . $Proyecto->titulo .
                       ' ha sido creado con éxito!');
        return redirect()->route('admin.proyectos.index');
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
        $proyecto = Proyecto::find($id);
        return view('admin.proyectos.edit')->with('proyecto', $proyecto);
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
        $proyecto = Proyecto::find($id);
        $proyecto->fill($request->all());
        $proyecto->save();
        Flash::warning('El proyecto: ' .
                       $proyecto->titulo .
                       ' ha sido editado con éxito!');
        return redirect()->route('admin.proyectos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proyecto = Proyecto::find($id);
        $proyecto->delete();
        Flash::error('El proyecto: ' . $proyecto->titulo . ' ha sido borrado');
        return redirect()->route('admin.proyectos.index');
    }
}
