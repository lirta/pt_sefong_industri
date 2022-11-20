<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKontrakPembelianRequest;
use App\Http\Requests\UpdateKontrakPembelianRequest;
use App\Models\KontrakPembelian;

class KontrakPembelianController extends Controller
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
     * @param  \App\Http\Requests\StoreKontrakPembelianRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKontrakPembelianRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KontrakPembelian  $kontrakPembelian
     * @return \Illuminate\Http\Response
     */
    public function show(KontrakPembelian $kontrakPembelian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KontrakPembelian  $kontrakPembelian
     * @return \Illuminate\Http\Response
     */
    public function edit(KontrakPembelian $kontrakPembelian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKontrakPembelianRequest  $request
     * @param  \App\Models\KontrakPembelian  $kontrakPembelian
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKontrakPembelianRequest $request, KontrakPembelian $kontrakPembelian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KontrakPembelian  $kontrakPembelian
     * @return \Illuminate\Http\Response
     */
    public function destroy(KontrakPembelian $kontrakPembelian)
    {
        //
    }
}
