<?php

namespace App\Http\Controllers\Admin;

use App\Models\Proj;
use Illuminate\Http\Request;

class ProjController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projs=Proj::all();
        return view('admin.proj.index',compact('projs'));
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
     * @param  \App\Models\Proj  $proj
     * @return \Illuminate\Http\Response
     */
    public function show(Proj $proj)
    {
        return view('admin.proj.show',compact('proj'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proj  $proj
     * @return \Illuminate\Http\Response
     */
    public function edit(Proj $proj)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proj  $proj
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proj $proj)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proj  $proj
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proj $proj)
    {
        //
    }
}
