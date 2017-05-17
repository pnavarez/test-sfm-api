<?php

namespace App\Http\Controllers;

use App\Ibo;
use Illuminate\Http\Request;

class IboController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ibo::all();
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
     * @param  \App\Ibo  $ibo
     * @return \Illuminate\Http\Response
     */
    public function show(Ibo $ibo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ibo  $ibo
     * @return \Illuminate\Http\Response
     */
    public function edit(Ibo $ibo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ibo  $ibo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ibo $ibo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ibo  $ibo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ibo $ibo)
    {
        //
    }
}
