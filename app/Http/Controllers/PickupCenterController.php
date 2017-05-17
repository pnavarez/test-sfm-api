<?php

namespace App\Http\Controllers;

use App\PickupCenter;
use Illuminate\Http\Request;

class PickupCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return PickupCenter::all();
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
     * @param  \App\PickupCenter  $pickupCenter
     * @return \Illuminate\Http\Response
     */
    public function show(PickupCenter $pickupCenter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PickupCenter  $pickupCenter
     * @return \Illuminate\Http\Response
     */
    public function edit(PickupCenter $pickupCenter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PickupCenter  $pickupCenter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PickupCenter $pickupCenter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PickupCenter  $pickupCenter
     * @return \Illuminate\Http\Response
     */
    public function destroy(PickupCenter $pickupCenter)
    {
        //
    }
}
