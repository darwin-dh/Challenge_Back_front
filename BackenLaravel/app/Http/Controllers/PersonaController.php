<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Faker\Provider\ar_EG\Person;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    //
    //getProduct obtiene todo los registro de la tabla persona
    protected function getPersona()
    {
        $persona  = Persona::all();
        if (is_null($persona)) {
            return response()->json(['mensaje' => 'registros no encontrado'], 404);
        }
        return response()->json(Persona::all(), 200);
    }
    //getPersonabyid ontiene registros filtados por id
    protected function getPersonabyid($id )    {
        $persona = Persona::find($id);
        if (is_null($persona)) {
            return response()->json(['mensaje' => 'registro no encontrado'], 404);
        }
        return response()->json($persona::find($id), 200);
    }
}
