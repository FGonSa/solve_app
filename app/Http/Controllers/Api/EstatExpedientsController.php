<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EstadoExpediente as EstadoExpedienteResources;
use App\Models\EstatExpedient;
use Illuminate\Http\Request;

class EstatExpedientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //models
        $estatExpedient = EstatExpedient::all();
        //resourses
        return EstadoExpedienteResources::collection($estatExpedient);
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
     * @param  \App\Models\EstatExpedient  $estatExpedient
     * @return \Illuminate\Http\Response
     */
    public function show(EstatExpedient $estatExpedient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EstatExpedient  $estatExpedient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EstatExpedient $estatExpedient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EstatExpedient  $estatExpedient
     * @return \Illuminate\Http\Response
     */
    public function destroy(EstatExpedient $estatExpedient)
    {
        //
    }
}
