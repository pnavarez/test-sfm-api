<?php

namespace App\Http\Controllers;

use App\Rebate;
use Illuminate\Http\Request;

class RebateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Rebate::all();
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
     * @param  \App\Rebate  $rebate
     * @return \Illuminate\Http\Response
     */
    public function show(Rebate $rebate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rebate  $rebate
     * @return \Illuminate\Http\Response
     */
    public function edit(Rebate $rebate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rebate  $rebate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rebate $rebate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rebate  $rebate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rebate $rebate)
    {
        //
    }
}
