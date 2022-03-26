<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TipusIncident;
use App\Models\Tipus_Incident;
use Illuminate\Http\Request;


class TipusIncidentsControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipus = Tipus_Incident::all();
        return TipusIncident::collection($tipus);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tipus_Incident  $tipus_Incident
     * @return \Illuminate\Http\Response
     */
    public function show(Tipus_Incident $tipus_Incident)
    {
        $tipus_Incident = Tipus_Incident::find($tipus_Incident->id);
        return new TipusIncident($tipus_Incident);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tipus_Incident  $tipus_Incident
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipus_Incident $tipus_Incident)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipus_Incident  $tipus_Incident
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipus_Incident $tipus_Incident)
    {
        //
    }
}
