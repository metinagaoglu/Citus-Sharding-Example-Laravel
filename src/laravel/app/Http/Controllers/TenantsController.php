<?php

namespace App\Http\Controllers;

use App\Models\tenants;
use Illuminate\Http\Request;

class TenantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenants = tenants::paginate(10);
        return view('tenants.index',compact('tenants'));
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
     * @param  \App\Models\tenants  $tenants
     * @return \Illuminate\Http\Response
     */
    public function show(tenants $tenants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tenants  $tenants
     * @return \Illuminate\Http\Response
     */
    public function edit(tenants $tenants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tenants  $tenants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tenants $tenants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tenants  $tenants
     * @return \Illuminate\Http\Response
     */
    public function destroy(tenants $tenants)
    {
        //
    }
}
