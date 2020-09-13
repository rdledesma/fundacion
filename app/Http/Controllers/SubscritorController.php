<?php

namespace App\Http\Controllers;

use App\Subscritor;
use Illuminate\Http\Request;

class SubscritorController extends Controller
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
        $subscritor = new Subscritor($request->all());
        $subscritor->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subscritor  $subscritor
     * @return \Illuminate\Http\Response
     */
    public function show(Subscritor $subscritor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subscritor  $subscritor
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscritor $subscritor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subscritor  $subscritor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscritor $subscritor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subscritor  $subscritor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscritor $subscritor)
    {
        //
    }
}
