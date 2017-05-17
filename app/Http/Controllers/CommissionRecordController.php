<?php

namespace App\Http\Controllers;

use App\CommissionRecord;
use Illuminate\Http\Request;

class CommissionRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return CommissionRecord::all();
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
     * @param  \App\CommissionRecord  $commissionRecord
     * @return \Illuminate\Http\Response
     */
    public function show(CommissionRecord $commissionRecord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CommissionRecord  $commissionRecord
     * @return \Illuminate\Http\Response
     */
    public function edit(CommissionRecord $commissionRecord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CommissionRecord  $commissionRecord
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CommissionRecord $commissionRecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CommissionRecord  $commissionRecord
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommissionRecord $commissionRecord)
    {
        //
    }
}
