<?php

namespace App\Http\Controllers;

use App\Models\Peticion;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\PeticionResource;
use App\Http\Resources\PeticionCollection;

class PeticionController extends Controller
{

    public function index()
    {
        return response()->json(new PeticionCollection(Peticion::all()),Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        $peticion = Peticion::create($request->only([
            'titulo','descripcion','categoria','autor','firmas'
        ]));
        return new PeticionResource($peticion);
    }

    public function show(Peticion $peticion)
    {
        return new PeticionResource($peticion);
    }

    public function update(Request $request, Peticion $peticion)
    {
        //Deberia haber un check para que un usuario solo pueda editar registros creados por si mismo
        $peticion->update($request->only([
            'titulo','descripcion','categoria','autor','firmas'
        ]));
    }

    public function destroy(Peticion $peticion)
    {
        //Deberia haber un check para que un usuario solo pueda borrar registros creados por si mismo
        $peticion->delete();

        return response()->json(null,Response::HTTP_NO_CONTENT);
    }
}
