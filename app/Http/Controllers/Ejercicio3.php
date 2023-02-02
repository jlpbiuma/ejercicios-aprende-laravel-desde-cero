<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio3 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return "GET OK";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return "CREASDFSADFASDFATEE OK";
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
        $request->validate([
            'name' => 'required|max:64',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string|min:0|max:512',
            'has_battery' => 'required|boolean',
            'battery_duration' => 'required_if:has_battery,1|numeric|min:0',
            'colors' => 'required|array',
            'colors.*' => 'required|string',
            'dimensions' => 'required|array',
            'dimensions.*' => 'required|numeric|min:0',
            'accessories' => 'required|array',
            'accessories.*' => 'required|array',
            'accessories.*.name' => 'required|string',
            'accessories.*.price' => 'required|numeric|min:0.0001'
        ]);
        return response("OK");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
