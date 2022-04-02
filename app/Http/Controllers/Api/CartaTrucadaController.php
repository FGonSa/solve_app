<?php

namespace App\Http\Controllers\Api;

use App\Classes\Utilitat;
use App\Models\CartaTrucada;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use App\Http\Resources\CartaTrucadaResource;

class CartaTrucadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agencia = CartaTrucada::all();
        return CartaTrucadaResource::collection($agencia);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carta = new CartaTrucada();

        $carta->codi_trucada = $request->input('codi_trucada');
        $carta->data_hora = $request->input('data_hora');
        $carta->temps_trucada = $request->input('temps_trucada');
        $carta->dades_personals_id = $request->input('dades_personals_id');
        $carta->telefon = $request->input('telefon');
        $carta->procedencia_trucada = $request->input('procedencia_trucada');
        $carta->origen_trucada = $request->input('origen_trucada');
        $carta->nom_trucada = $request->input('nom_trucada');
        $carta->comarca = $request->input('comarca_id');
        $carta->municipis_id_trucada = $request->input('municipis_id_trucada');
        $carta->adreca_trucada = $request->input('adreca_trucada');
        $carta->fora_catalunya = $request->input('fora_catalunya');
        $carta->provincies_id = $request->input('provincies_id');
        $carta->municipis_id = $request->input('municipis_id');
        $carta->tipus_localitzacions_id = $request->input('tipus_localitzacions_id');
        $carta->descripcio_localitzacio = $request->input('descripcio_localitzacio');
        $carta->altres_ref_localitzacio = $request->input('altres_ref_localitzacio');
        $carta->incidents_id = $request->input('incidents_id');
        $carta->tipus_incident = $request->input('tipus_incidents_descripcio');
        $carta->nota_comuna = $request->input('nota_comuna');
        $carta->expedients_id = $request->input('expedients_id');
        $carta->usuaris_id = $request->input('usuaris_id');

        try {
            $carta->save();
            $response = (new CartaTrucadaResource($carta))->response()->setStatusCode(201);
        } catch (QueryException $ex) {
            $mensaje = Utilitat::errorMessage($ex);
            $response = \response()->json(['error' => $mensaje], 400);
        }
        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CartaTrucada  $cartaTrucada
     * @return \Illuminate\Http\Response
     */
    public function show(CartaTrucada $cartaTrucada)
    {
        $cartaTrucada = CartaTrucada::find($cartaTrucada->id);
        return new CartaTrucadaResource($cartaTrucada);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CartaTrucada  $cartaTrucada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CartaTrucada $carta)
    {
        $carta->codi_trucada = $request->input('codi_trucada');
        $carta->data_hora = $request->input('data_hora');
        $carta->temps_trucada = $request->input('temps_trucada');
        $carta->dades_personals_id = $request->input('dades_personals_id');
        $carta->telefon = $request->input('telefon');
        $carta->procedencia_trucada = $request->input('procedencia_trucada');
        $carta->origen_trucada = $request->input('origen_trucada');
        $carta->nom_trucada = $request->input('nom_trucada');
        $carta->municipis_id_trucada = $request->input('municipis_id_trucada');
        $carta->adreca_trucada = $request->input('adreca_trucada');
        $carta->fora_catalunya = $request->input('fora_catalunya');
        $carta->provincies_id = $request->input('provincies_id');
        $carta->municipis_id = $request->input('municipis_id');
        $carta->tipus_localitzacions = $request->input('tipus_localitzacions');
        $carta->descripcio_localitzacio = $request->input('descripcio_localitzacio');
        $carta->altres_ref_localitzacio = $request->input('altres_ref_localitzacio');
        $carta->incidents_id = $request->input('incidents_id');
        $carta->nota_comuna = $request->input('nota_comuna');
        $carta->expedients_id = $request->input('expedients_id');
        $carta->usuaris_id = $request->input('usuaris_id');

        try {
            $carta->save();
            $response = (new CartaTrucadaResource($carta))->response()->setStatusCode(201);
        } catch (QueryException $ex) {
            $mensaje = Utilitat::errorMessage($ex);
            $response = \response()->json(['error' => $mensaje], 400);
        }
        return $response;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CartaTrucada  $cartaTrucada
     * @return \Illuminate\Http\Response
     */
    public function destroy(CartaTrucada $cartaTrucada)
    {
        try {
            $cartaTrucada->delete();
            $response = \response()->json(['mensaje' => 'Registro eliminado correctamente.'], 200);
        } catch (QueryException $ex) {
            $mensaje = Utilitat::errorMessage($ex);
            $response = \response()->json(['error' => $mensaje], 404);
        }
        return $response;
    }
}
