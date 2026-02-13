<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreclubRequest;
use App\Http\Requests\UpdateclubRequest;
use App\Club;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Club::where('active', 1)->orderBy('name');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreclubRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(club $club)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(club $club)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateclubRequest $request, club $club)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(club $club)
    {
        //
    }
}
