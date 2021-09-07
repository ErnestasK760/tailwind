<?php

namespace App\Http\Controllers;

use App\Models\Operation_title;
use Illuminate\Http\Request;

class OperationTitleController extends Controller
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


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $operation_title = new Operation_title;
        $operation_title->name = $request->operation_title_name;
        $operation_title->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Operation_title  $operation_title
     * @return \Illuminate\Http\Response
     */
    public function show(Operation_title $operation_title)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Operation_title  $operation_title
     * @return \Illuminate\Http\Response
     */
    public function edit(Operation_title $operation_title)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Operation_title  $operation_title
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Operation_title $operation_title)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Operation_title  $operation_title
     * @return \Illuminate\Http\Response
     */
    public function destroy(Operation_title $operation_title)
    {
        //
    }
}
