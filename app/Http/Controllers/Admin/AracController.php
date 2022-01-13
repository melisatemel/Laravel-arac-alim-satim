<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Arac;
use Illuminate\Http\Request;

class AracController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Arac::all();
        return view('admin.arac',['datalist'=> $datalist]);
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
     * @param  \App\Models\Arac  $arac
     * @return \Illuminate\Http\Response
     */
    public function show(Arac $arac)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Arac  $arac
     * @return \Illuminate\Http\Response
     */
    public function edit(Arac $arac)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Arac  $arac
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Arac $arac)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Arac  $arac
     * @return \Illuminate\Http\Response
     */
    public function destroy(Arac $arac)
    {
        //
    }
}
