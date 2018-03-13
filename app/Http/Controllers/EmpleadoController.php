<?php

namespace App\Http\Controllers;

use App\DireccionGeneral;
use App\Empleado;
use function foo\func;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dgs = DireccionGeneral::select("id", "nombre")->get();

        return view('perfil', compact("dgs"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:25',
            'dg' => 'required',
            'apellido' => 'required|max:25',
            'documento' => 'required|numeric',
        ]);

        $dg = DireccionGeneral::find($request->dg);
        $user = $request->user();
        $empleado = new Empleado();
        $empleado->nombre = $request->nombre;
        $empleado->documento = $request->documento;
        $empleado->apellido = $request->apellido;
        //dd($empleado);
        $empleado->direccionGeneral()->associate($dg);
        $user->empleado()->save($empleado);

        return redirect("/home")->with("message", "Perfil creado");
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Request $request)
    {
        $dgs = DireccionGeneral::select("id", "nombre")->get();
        $empleado = $request->user()->empleado()->first();
        return view('editperfil', compact("dgs","empleado"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:25',
            'dg' => 'required',
            'apellido' => 'required|max:25',
            'documento' => 'required|numeric',
        ]);

        $dg = DireccionGeneral::find($request->dg);
        $user = $request->user();
        $empleado = $user->empleado()->first();
        $empleado->nombre = $request->nombre;
        $empleado->documento = $request->documento;
        $empleado->apellido = $request->apellido;
        //->empleados()->first()->direccionGeneral()->first()->empleados()->disassociate($user->empleado()->first());
        //$user->empleado()->first()->direccionGeneral()->first()->disassociate();
        $empleado->direccionGeneral()->associate($dg);
        $empleado->save();
        return redirect("/home")->with("message", "Perfil editado");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $dg=DireccionGeneral::with("empleados")->find($request->id);

        //para traer de una relacion con alguna condicion
        /*$dg=DireccionGeneral::with(["empleados" => function($q){
            return $q->where("id",4);
        }])->find($request->id);*/

        //asi no va
        //$empleados=Empleado::select('id','nombre','apellido','documento')->where('id_dg','=',$request->id)->get();
        return view('direccionGral', compact("dg"));
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
