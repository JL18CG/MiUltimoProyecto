<?php

namespace App\Http\Controllers\dashboard;

use App\Vino;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVinoPost;
use App\Http\Requests\UpdateVinoPut;

class VinoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $vinos = Vino::orderBy('created_at', 'asc')->paginate(10);
        return view('dashboard.vinos.index',['vinos' => $vinos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.vinos.crear', ['vino' => new Vino()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVinoPost $request)
    {

        Vino::create(
            [
                'nombre' => $request['nombre'],
                'marca' => $request['marca'],
                'precio' => $request['precio'],
                'descripcion' => $request['descripcion'],
                'region' => $request['region'],
                'color' => $request['color'],
                'tipo' => $request['tipo'],
                'meses_tiempo' => $request['meses_tiempo'],
                't_azucar' => $request['t_azucar']
            ]
        );
        
        
        return back()->with('status', 'Vino añadido con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vino $vino)
    {
        return view('dashboard.vinos.ver', ["vino" => $vino]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vino $vino)
    {

        return view('dashboard.vinos.actualizar', ["vino" => $vino]);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVinoPut $request,Vino $vino)
    {
        $vino->update([
            
                'nombre' => $request['nombre'],
                'marca' => $request['marca'],
                'precio' => $request['precio'],
                'descripcion' => $request['descripcion'],
                'region' => $request['region'],
                'color' => $request['color'],
                'tipo' => $request['tipo'],
                'meses_tiempo' => $request['meses_tiempo'],
                't_azucar' => $request['t_azucar']
            
        ]);

        return back()->with('status', 'Vino actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vino $vino)
    {
        $vino->delete();
        return back()->with('status', 'Vino eliminado con exito');
    }
}
