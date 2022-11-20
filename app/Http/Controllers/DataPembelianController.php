<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDataPembelianRequest;
use App\Http\Requests\UpdateDataPembelianRequest;
use App\Models\DataPembelian;

class DataPembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDataPembelianRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDataPembelianRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataPembelian  $dataPembelian
     * @return \Illuminate\Http\Response
     */
    public function show(DataPembelian $dataPembelian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataPembelian  $dataPembelian
     * @return \Illuminate\Http\Response
     */
    public function edit(DataPembelian $dataPembelian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDataPembelianRequest  $request
     * @param  \App\Models\DataPembelian  $dataPembelian
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDataPembelianRequest $request, DataPembelian $dataPembelian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataPembelian  $dataPembelian
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataPembelian $dataPembelian)
    {
        //
    }
}
