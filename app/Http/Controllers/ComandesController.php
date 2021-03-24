<?php

namespace App\Http\Controllers;

use App\Comandes;
use Illuminate\Http\Request;

class ComandesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view(comands.index)->with(['comands'=>Comand::all()]);
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
     * @param  \App\Comandes  $comandes
     * @return \Illuminate\Http\Response
     */
    public function show(Comandes $comandes)
    {
        //
        return view(comands.show)->withComand($comand);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comandes  $comandes
     * @return \Illuminate\Http\Response
     */
    public function edit(Comandes $comandes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comandes  $comandes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comandes $comandes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comandes  $comandes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comandes $comandes)
    {
        //
    }
}
