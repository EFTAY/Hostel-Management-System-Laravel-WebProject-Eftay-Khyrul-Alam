<?php

namespace App\Http\Controllers;

use App\Models\HostleSeats;
use Illuminate\Http\Request;

class HostleSeatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seats=HostleSeats::orderBy('floor','asc')->get();
        // return $seats;
        return view('backEnd.students.information.createSeats',compact('seats'));
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
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HostleSeats  $hostleSeats
     * @return \Illuminate\Http\Response
     */
    public function show(HostleSeats $hostleSeats)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HostleSeats  $hostleSeats
     * @return \Illuminate\Http\Response
     */
    public function edit(HostleSeats $hostleSeats)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HostleSeats  $hostleSeats
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HostleSeats $hostleSeats)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HostleSeats  $hostleSeats
     * @return \Illuminate\Http\Response
     */
    public function destroy(HostleSeats $hostleSeats)
    {
        //
    }
}
