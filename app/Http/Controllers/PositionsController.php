<?php

namespace App\Http\Controllers;
use App\Models\Position;
use Illuminate\Http\Request;

class PositionsController extends Controller
{
    public function index()
    {
        $positions = Position::where("IsActive", "=", true) -> get();
        return view("positions.index", ["positions" => $positions]);
    }
    public function edit($id) {
        $positions = Position::find($id);
        return view("positions.edit", ["positions" => $positions]);

    }
    public function update(Request $request, $id) {
        $positions = Position::find($id);
        $positions -> Title = $request->input('Title');
        $positions -> save();
        return redirect("/positions");
    }
    public function delete($id) {
        $positions = Position::find($id);
        $positions -> IsActive = false;
        $positions -> save();
        return redirect("/positions");
    }
    public function create() {
        return view("positions.create");
    }
    public function addToDB(Request $request) {
        $positions= new Position();
        $positions -> Title = $request->input('Title');
        $positions -> save();
        return redirect("/positions");
    }
}
