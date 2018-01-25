<?php

namespace App\Http\Controllers;

use App\Empleado;
use App\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $proyectos=Proyecto::all();
        return view('lista_proyecto',compact("proyectos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyecto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:25',
            'fecha_entrega' => 'required|date',
        ]);

        $proyecto = new Proyecto();
        $proyecto->nombre = $request->nombre;
        $proyecto->fecha_entrega = $request->fecha_entrega;
        $proyecto->save();
        return redirect("/home")->with("message", "Proyecto creado!");
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

    public function suscripcion(Request $request, $id)
    {
        $user =$request->user();
        $empleado = $user->empleado()->first();
        $empleado->proyectos()->attach($id);
        return redirect()->back()->with("message", "Proyecto asignado!");
    }

    public function desuscripcion(Request $request, $id)
    {
        $user =$request->user();
        $empleado = $user->empleado()->first();
        $empleado->proyectos()->detach($id);
        return redirect()->back()->with("message", "Proyecto desasignado!");
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
        //
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
    }
}
