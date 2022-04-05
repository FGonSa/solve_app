<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CartaTrucadaHasAgencias;
use Illuminate\Http\Request;
use App\Http\Resources\CartaTrucadaHasAgenciasResource;

class CartaHasAgenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //models
        $cartes_trucades_has_agencies = CartaTrucadaHasAgencias::all();
        //resourses
        return CartaTrucadaHasAgenciasResource::collection($cartes_trucades_has_agencies);
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
     * @param  \App\Models\CartaTrucadaHasAgencias  $cartaTrucadaHasAgencias
     * @return \Illuminate\Http\Response
     */
    public function show(CartaTrucadaHasAgencias $cartaTrucadaHasAgencias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CartaTrucadaHasAgencias  $cartaTrucadaHasAgencias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CartaTrucadaHasAgencias $cartaTrucadaHasAgencias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CartaTrucadaHasAgencias  $cartaTrucadaHasAgencias
     * @return \Illuminate\Http\Response
     */
    public function destroy(CartaTrucadaHasAgencias $cartaTrucadaHasAgencias)
    {
        //
    }
}
