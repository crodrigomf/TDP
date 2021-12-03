<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlantasRequest;
use App\Http\Requests\UpdatePlantasRequest;
use App\Models\Plantas;

class PlantasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('plantas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('plantas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePlantasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlantasRequest $request)
    {
        //
        //return 'Envio confirmado';
        Plantas::create([
            'popular' => $request->popular,
            'cientifico' => $request->cientifico,
            'quantidade' => $request->quantidade,
        ]);
       return redirect('/plantas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plantas  $plantas
     * @return \Illuminate\Http\Response
     */
    public function show(Plantas $plantas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plantas  $plantas
     * @return \Illuminate\Http\Response
     */
    public function edit(Plantas $plantas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlantasRequest  $request
     * @param  \App\Models\Plantas  $plantas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlantasRequest $request, Plantas $plantas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plantas  $plantas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plantas $plantas)
    {
        //
    }
}
