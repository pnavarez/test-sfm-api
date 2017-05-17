<?php

namespace App\Http\Controllers;

use App\ActivationType;
use Illuminate\Http\Request;

class ActivationTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return ActivationType::all();
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
     * @param  \App\ActivationType  $activationType
     * @return \Illuminate\Http\Response
     */
    public function show(ActivationType $activationType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ActivationType  $activationType
     * @return \Illuminate\Http\Response
     */
    public function edit(ActivationType $activationType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ActivationType  $activationType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ActivationType $activationType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ActivationType  $activationType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ActivationType $activationType)
    {
        //
    }
}
