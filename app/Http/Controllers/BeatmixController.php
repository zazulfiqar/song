<?php

namespace App\Http\Controllers;

use App\beatmix;
use Illuminate\Http\Request;

class BeatmixController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.beatmix');
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
     * @param  \App\beatmix  $beatmix
     * @return \Illuminate\Http\Response
     */
    public function show(beatmix $beatmix)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\beatmix  $beatmix
     * @return \Illuminate\Http\Response
     */
    public function edit(beatmix $beatmix)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\beatmix  $beatmix
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, beatmix $beatmix)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\beatmix  $beatmix
     * @return \Illuminate\Http\Response
     */
    public function destroy(beatmix $beatmix)
    {
        //
    }
}
