<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ControllerEjercicio3 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * 
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * 
     */
    public function create()
    {
        dd("Ha llegado a create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * 
     * 
     */
    public function store(Request $request)
    {
        // Desde la función store se crea un nuevo objeto de tipo Contact
        // y se le asignan los valores de los campos del formulario
        // También se aplica el Schema para validar!!!!

        return response("Contact created");
    }

    /**
     * Display the specified resource.
     *
     * 
     * 
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * 
     * 
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * 
     * 
     * 
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * 
     * 
     */
    public function destroy()
    {
        //
    }
}
