<?php

namespace App\Http\Controllers;

use App\Tbl72200414;
use Illuminate\Http\Request;


class Tbl72200414Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Tbl72200414::orderBy('id', 'asc')->get();
        return view('tbl72200414', ['articles' => $articles]);
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
     * @param  \App\Tbl72200414  $tbl72200414
     * @return \Illuminate\Http\Response
     */
    public function show(Tbl72200414 $tbl72200414)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tbl72200414  $tbl72200414
     * @return \Illuminate\Http\Response
     */
    public function edit(Tbl72200414 $tbl72200414)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tbl72200414  $tbl72200414
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tbl72200414 $tbl72200414)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tbl72200414  $tbl72200414
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tbl72200414 $tbl72200414)
    {
        //
    }
}
