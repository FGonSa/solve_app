<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Comarca as ResourcesComarca;
use App\Models\Comarca;
use Illuminate\Http\Request;

class ComarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comarca = Comarca::all();
        return ResourcesComarca::collection($comarca);
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
     * @param  \App\Models\Comarca  $comarca
     * @return \Illuminate\Http\Response
     */
    public function show(Comarca $comarca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comarca  $comarca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comarca $comarca)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comarca  $comarca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comarca $comarca)
    {
        //
    }
}
