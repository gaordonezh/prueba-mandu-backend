<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\SubDivision;
use App\Models\TopDivision;
use Illuminate\Http\Request;
use Validator;

class DivisionController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $divisions = Division::all();

        foreach ($divisions as $key => $div) {
            $top_divisions = TopDivision::where('division_id', $div->id)
                ->join("divisions as d", "top_divisions.top_division_id", "=", "d.id")
                ->select("d.name", "top_divisions.id")
                ->first();
            $sub_divisions = SubDivision::where('division_id', $div->id)
                ->join("divisions as d", "sub_divisions.sub_division_id", "=", "d.id")
                ->select("d.name", "sub_divisions.id")
                ->get();

            $divisions[$key]["top"] = $top_divisions;
            $divisions[$key]["sub"] = $sub_divisions;
        }

        return $this->sendResponse($divisions, "Divisions obtained correctly");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:divisions|min:1|max:45',
            'n_collaborators' => 'required|numeric',
            'level' => 'required|numeric',
            'ambassador' => 'max:50',
        ]);

        if ($validator->fails()) {
            return $this->sendError("Error de validacion", $validator->errors(), 422);
        }


        $form = new Division();
        $form->name = $request->get("name");
        $form->n_collaborators = $request->get("n_collaborators");
        $form->level = $request->get("level");
        $form->ambassador = $request->get("ambassador");
        $form->save();

        return $this->sendResponse("Saved", "Division saved correctly");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function show(Division $division)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Division $division)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:1|max:45|unique:divisions,name,' . $division->id,
            'n_collaborators' => 'required|numeric',
            'level' => 'required|numeric',
            'ambassador' => 'max:50',
        ]);

        if ($validator->fails()) {
            return $this->sendError("Error de validacion", $validator->errors(), 422);
        }

        $division->name = $request->get("name");
        $division->n_collaborators = $request->get("n_collaborators");
        $division->level = $request->get("level");
        $division->ambassador = $request->get("ambassador");
        $division->update();

        return $this->sendResponse("Updated", "Division updated correctly");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function destroy(Division $division)
    {
        $division->delete();
        return $this->sendResponse("Deleted", "Division deleted correctly");
    }
}
