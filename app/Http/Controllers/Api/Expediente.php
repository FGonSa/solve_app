<?php

namespace App\Http\Controllers\Api;

use DateTime;
use App\Classes\Utilitat;
use App\Models\Expedient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use App\Http\Resources\Expediente as ExpedienteResources;

class Expediente extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //models
        $expedient = Expedient::all();
        //resourses
        return ExpedienteResources::collection($expedient);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $expediente = new Expedient();
        $expediente->data_creacio =  new DateTime();
        $expediente->data_ultima_modificacio = null;
        $expediente->estats_expedients_id = $request->input('estats_expedients_id');

        try {
            $expediente->save();
            $response = (new ExpedienteResources($expediente))->response()->setStatusCode(201);
        } catch (QueryException $ex) {
            $mensaje = Utilitat::errorMessage($ex);
            $response = \response()->json(['error' => $mensaje], 400);
        }
        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expedient  $expedient
     * @return \Illuminate\Http\Response
     */
    public function show(Expedient $expedient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expedient  $expedient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expedient $expedient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expedient  $expedient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expedient $expedient)
    {
        //
    }
}
