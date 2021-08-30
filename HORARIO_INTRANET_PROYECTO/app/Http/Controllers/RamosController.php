<?php

namespace App\Http\Controllers;

use App\Models\Ramos;
use Illuminate\Http\Request;

class RamosController extends Controller
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
     * @param  \App\Models\Ramos  $ramos
     * @return \Illuminate\Http\Response
     */
    public function show(Ramos $ramos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ramos  $ramos
     * @return \Illuminate\Http\Response
     */
    public function edit(Ramos $ramos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ramos  $ramos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ramos $ramos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ramos  $ramos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ramos $ramos)
    {
        //
    }

    public function getramos()
    {
        
        $datos['Ramos'] = Ramos::all();
        return view('welcome', $Ramos);
    }
}
