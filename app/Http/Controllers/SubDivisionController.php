<?php

namespace App\Http\Controllers;

use App\Models\SubDivision;
use Illuminate\Http\Request;

class SubDivisionController extends ApiController
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
        $create = new SubDivision();
        $create->division_id = $request->get("divisionId");
        $create->sub_division_id = $request->get("sub_division_id");
        $create->save();

        return $this->sendResponse("Updated", "Subdivisions updated correctly");
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubDivision $subdivision)
    {
        $subdivision->delete();
        return $this->sendResponse("Deleted", "Subdivision deleted correctly");
    }
}
