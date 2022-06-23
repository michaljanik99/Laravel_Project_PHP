<?php
namespace App\Http\Controllers;
use App\Models\Priority;
use Illuminate\Http\Request;

class PriorityesController extends Controller
{
    public function index()
    {
        $priorityes = Priority::where("IsActive", "=", true) -> get();
        return view("priorityes.index", ["priorityes" => $priorityes]);
    }
    public function edit($id) {
        $priorityes = Priority::find($id);
        return view("priorityes.edit", ["priorityes" => $priorityes]);
    }
    public function update(Request $request, $id) {
        $request->validate([
            'Title' => 'required|max:64',
        ]);
        $priorityes = Priority::find($id);
        $priorityes -> Title = $request->input('Title');
        $priorityes -> save();
        return redirect("/priorityes");
    }
    public function delete($id) {
        $priorityes = Priority::find($id);
        $priorityes -> IsActive = false;
        $priorityes -> save();
        return redirect("/priorityes");
    }
    public function search(Request $request){
        $search = $request->input('search');
        $request->validate([
            'search' => 'required',
        ]);
        $priorityes = Priority::where("IsActive", "=", true)->where('Title', 'LIKE', "%{$search}%")->get();
        return view('/priorityes/search', ['priorityes'=>$priorityes,'search'=>$search]);
    }
    public function create() {
        return view("priorityes.create");
    }
    public function addToDB(Request $request) {
        $request->validate([
            'Title' => 'required|max:64',
        ]);
        $priorityes= new Priority();
        $priorityes -> Title = $request->input('Title');
        $priorityes -> save();
        return redirect("/priorityes");
    }
}
