<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercise3 extends Controller
{
    //
    public function create() {
        return "GET OK";
    }
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|max:64',
            'price' => 'required|numeric|min:0',
            'description' => 'required|numeric|min:0|max:512',
            'battery_duration' => 'required_if:has_battery,true|min:0',
            'has_battery' => 'required|boolean',
            'colors' => 'required|array',
            'dimensions' => 'required|array',
            'dimensions.*' => 'required|numeric|min:0',
            'accessories' => 'required|array',
            'accessories.*' => 'required|array',
            'accessories.*.name' => 'required|string',
            'accessories.*.price' => 'required|numeric|min:0'
        ]);
        return "OK";
    }
}
