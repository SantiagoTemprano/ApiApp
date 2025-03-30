<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\AutorResource;
use App\Http\Resources\AutorCollection;

class AutorController extends Controller
{
    public function index()
    {
        return response()->json(new AutorCollection(Autor::all()),Response::HTTP_OK);
    }

    public function show(Autor $autor)
    {
        return new AutorResource($autor);
    }

}
