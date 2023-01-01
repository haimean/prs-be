<?php

namespace App\Http\Controllers;

use App\Models\COmment;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCOmmentRequest;
use App\Http\Requests\UpdateCOmmentRequest;

class CommentController extends Controller
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
     * @param  \App\Http\Requests\StoreCOmmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCOmmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\COmment  $cOmment
     * @return \Illuminate\Http\Response
     */
    public function show(COmment $cOmment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\COmment  $cOmment
     * @return \Illuminate\Http\Response
     */
    public function edit(COmment $cOmment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCOmmentRequest  $request
     * @param  \App\Models\COmment  $cOmment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCOmmentRequest $request, COmment $cOmment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\COmment  $cOmment
     * @return \Illuminate\Http\Response
     */
    public function destroy(COmment $cOmment)
    {
        //
    }
}
