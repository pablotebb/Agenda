<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contacto;
use Laracasts\Flash\Flash;


class ContactosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $contactos = Contacto::orderBy('id', 'ASC')->paginate(5);
      return view('admin.contactos.index')->with('contactos', $contactos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contactos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactoRequest $request)
    {
      $contacto = new Contacto($request->all());
      $contacto->save();
      Flash::success('El contacto ' . $contacto->name .
                     ' ha sido creado con éxito!');
      return redirect()->route('admin.contactos.index');
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
      $contacto = Contacto::find($id);
      return view('admin.contactos.edit')->with('contacto', $contacto);
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
      $contacto = Contacto::find($id);
      $contacto->fill($request->all());
      $contacto->save();
      Flash::warning('El contacto ' .
                      $contacto->name .
                    ' ha sido editado con éxito!');
      return redirect()->route('admin.contactos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $contacto = Contacto::find($id);
       $contacto->delete();
       Flash::error('El contacto' . $contacto->name . ' ha sido borrado');
       return redirect()->route('admin.contactos.index');
    }
}
