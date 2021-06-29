<?php

namespace App\Http\Controllers;
use App\beatmixsongs;
use App\sat_night_party;
use Illuminate\Http\Request;

class SatNightPartyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.sat_night_party');
    }

    public function index2()
    {
        $data=beatmixsongs::all();
        return view('frontend.index')->with('data', $data);
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
     * @param  \App\sat_night_party  $sat_night_party
     * @return \Illuminate\Http\Response
     */
    public function show(sat_night_party $sat_night_party)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sat_night_party  $sat_night_party
     * @return \Illuminate\Http\Response
     */
    public function edit(sat_night_party $sat_night_party)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sat_night_party  $sat_night_party
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sat_night_party $sat_night_party)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sat_night_party  $sat_night_party
     * @return \Illuminate\Http\Response
     */
    public function destroy(sat_night_party $sat_night_party)
    {
        //
    }
}
