<?php

namespace App\Http\Controllers\Api;

use App\Models\CartaTrucada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Resources\CartaTrucadaResource;

class CountIncident extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $numIncidents = [];
        for ($x = 0; $x < 10; $x++) {
            $incidents = DB::table('cartes_trucades')
                ->where('tipus_incident', $x + 1)
                ->count();

            $incidents = $incidents * 10;
            array_push($numIncidents, $incidents);
        }
        return $numIncidents;
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
     * @param  \App\Models\CartaTrucada  $cartaTrucada
     * @return \Illuminate\Http\Response
     */
    public function show(CartaTrucada $cartaTrucada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CartaTrucada  $cartaTrucada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CartaTrucada $cartaTrucada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CartaTrucada  $cartaTrucada
     * @return \Illuminate\Http\Response
     */
    public function destroy(CartaTrucada $cartaTrucada)
    {
        //
    }
}
