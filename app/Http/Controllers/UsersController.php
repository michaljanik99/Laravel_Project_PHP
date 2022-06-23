<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Position;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::leftJoin('Positions', 'Users.PositionId', '=', 'Positions.Id')->where("Users.IsActive", "=", true)->get(['Users.*', 'Positions.Title AS PositionTitle']);
        return view("users.index", ["users" => $users]);
    }
    public function edit($id) {
        $positions = Position::where("IsActive", "=", true) -> get();
        $users = User::leftJoin('Positions', 'Users.PositionId', '=', 'Positions.Id')->where("Users.Id", "=", $id)->get(['Users.*', 'Positions.Id AS PositionId'])->first();
        return view("users.edit", ["users" => $users,"positions"=>$positions]);
    }
    public function update(Request $request, $id) {
        $request->validate([
            'Name' => 'required|max:64',
            'Surname' => 'required|max:64',
            'Position' => 'required|integer',
            'Adress' => 'required|max:256',
        ]);
        $users = User::find($id);
        $users -> Name = $request->input('Name');
        $users -> Surname = $request->input('Surname');
        $users -> PositionId = $request -> input('Position');
        $users -> Adress = $request->input('Adress');
        $users -> save();
        return redirect("/users");
    }
    public function delete($id) {
        $users = User::find($id);
        $users -> IsActive = false;
        $users -> save();
        return redirect("/users");
    }
    public function search(Request $request){
        $search = $request->input('search');
        $request->validate([
            'search' => 'required',
        ]);
        $users = User::rightJoin('Positions', 'Users.PositionId', '=', 'Positions.Id')->where("Users.IsActive", "=", true)->where(function($query) use ($search){
            $query->where('Users.Name', 'LIKE', "%$search%");
            $query->orWhere('Users.Surname', 'LIKE', "%$search%");
        })->get(['Users.*', 'Positions.Title AS PositionTitle']);
        return view('/users/search', ['users'=>$users,'search'=>$search]);
    }
    public function create() {
        $positions = Position::where("IsActive", "=", true) -> get();
        return view("users.create",['positions'=>$positions]);
    }
    public function addToDB(Request $request) {
        $request->validate([
            'Name' => 'required|max:64',
            'Surname' => 'required|max:64',
            'Position' => 'required|integer',
            'Adress' => 'required|max:256',
        ]);

        $users= new User();
        $users -> Name = $request->input('Name');
        $users -> Surname = $request->input('Surname');
        $users -> PositionId = $request -> input('Position');
        $users -> Adress = $request->input('Adress');
        $users -> save();
        return redirect("/users");
    }
}
