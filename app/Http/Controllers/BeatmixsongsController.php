<?php

namespace App\Http\Controllers;

use App\beatmixsongs;
use Illuminate\Http\Request;

class BeatmixsongsController extends Controller
{

 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd("Data Hit");
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
     * @param  \App\beatmixsongs  $beatmixsongs
     * @return \Illuminate\Http\Response
     */
    public function show(beatmixsongs $beatmixsongs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\beatmixsongs  $beatmixsongs
     * @return \Illuminate\Http\Response
     */
    public function edit(beatmixsongs $beatmixsongs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\beatmixsongs  $beatmixsongs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, beatmixsongs $beatmixsongs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\beatmixsongs  $beatmixsongs
     * @return \Illuminate\Http\Response
     */
    public function destroy(beatmixsongs $beatmixsongs)
    {
        //
    }
}
