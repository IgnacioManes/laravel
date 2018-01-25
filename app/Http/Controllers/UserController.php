<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function destroy(Request $request){
        $user=$request->user();
        $empleado = $user->empleado()->first();
        $empleado->proyectos()->detach();
        $empleado->delete();
        $user->delete();

        return redirect('/');
    }
}
