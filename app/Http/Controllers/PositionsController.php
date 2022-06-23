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
        $request->validate([
            'Title' => 'required|max:64',
        ]);
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
    public function search(Request $request){
        $search = $request->input('search');
        $positions = Position::where("IsActive", "=", true)->where('Positions.Title', 'LIKE', "%{$search}%")->get();
        return view('/positions/search', ['positions'=>$positions,'search'=>$search]);
    }
    public function create() {
        return view("positions.create");
    }
    public function addToDB(Request $request) {
        $request->validate([
            'Title' => 'required|max:64',
        ]);
        $positions= new Position();
        $positions -> Title = $request->input('Title');
        $positions -> save();
        return redirect("/positions");
    }
}
