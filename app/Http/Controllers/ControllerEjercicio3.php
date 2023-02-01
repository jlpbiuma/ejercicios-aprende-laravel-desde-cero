<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ControllerEjercicio3 extends Controller
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
        dd("Ha llegado a create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:64'],
            'description' => ['required', 'string', 'max:512'],
            'price' => ['required', 'numeric', 'min:0'],
            'has_battery' => ['required', 'boolean'],
            'battery_duration' => ['required_if:has_battery,true', 'numeric', 'min:0'],
            'color' => ['required', 'array'],
            'dimensions' 

        ]);
        return response($request->all(), 201);
    }

    /**
     * Display the specified resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
