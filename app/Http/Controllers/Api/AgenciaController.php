<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Agencia as ResourcesAgencia;
use App\Models\Agencia;
use Illuminate\Http\Request;

class AgenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agencia = Agencia::all();
        return ResourcesAgencia::collection($agencia);
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
     * @param  \App\Models\Agencia  $agencia
     * @return \Illuminate\Http\Response
     */
    public function show(Agencia $agencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agencia  $agencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agencia $agencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agencia  $agencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agencia $agencia)
    {
        //
    }
}
