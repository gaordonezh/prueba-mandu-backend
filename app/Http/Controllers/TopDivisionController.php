<?php

namespace App\Http\Controllers;

use App\Models\TopDivision;
use Illuminate\Http\Request;

class TopDivisionController extends ApiController
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = new TopDivision();
        $create->division_id = $request->get("division_id");
        $create->top_division_id = $request->get("top_division_id");
        $create->save();

        return $this->sendResponse("Updated", "Topdivision updated correctly");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TopDivision $topdivision)
    {
        $topdivision->top_division_id = $request->get("top_division_id");
        $topdivision->update();

        return $this->sendResponse("Updated", "Topdivision updated correctly");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TopDivision  $top_division
     * @return \Illuminate\Http\Response
     */
    public function destroy(TopDivision $topdivision)
    {
        $topdivision->delete();
        return $this->sendResponse("Deleted", "Topdivision deleted correctly");
    }
}
