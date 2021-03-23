<?php

namespace App\Http\Controllers;

use App\Http\Requests\WarehouseIORequest;
use App\Models\warehouse;
use App\Models\warehouse_io;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WarehouseIoController extends Controller
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
    public function create(warehouse $warehouse)
    {
        $myWarehouses = $warehouse::where('tenant_id',Auth::user()->tenant_id)->get();
        return view('warehouse_io.create',compact('myWarehouses','warehouse'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WarehouseIORequest $request)
    {
        $validated = $request->validated();

        $request->request->add(['tenant_id' => Auth::user()->tenant_id]);
var_dump($request->all());
        $insert = warehouse_io::create($request->except('_token'));
        dd($insert);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\warehouse_io  $warehouse_io
     * @return \Illuminate\Http\Response
     */
    public function show(warehouse_io $warehouse_io)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\warehouse_io  $warehouse_io
     * @return \Illuminate\Http\Response
     */
    public function edit(warehouse_io $warehouse_io)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\warehouse_io  $warehouse_io
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, warehouse_io $warehouse_io)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\warehouse_io  $warehouse_io
     * @return \Illuminate\Http\Response
     */
    public function destroy(warehouse_io $warehouse_io)
    {
        //
    }
}
