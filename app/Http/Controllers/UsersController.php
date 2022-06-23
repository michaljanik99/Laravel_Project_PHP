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
        $users = User::leftJoin('Positions', 'Users.PositionId', '=', 'Positions.Id')->where("Users.IsActive", "=", true)->where('Users.Name', 'LIKE', "%{$search}%")->orWhere('Users.Surname', 'LIKE', "%{$search}%")->get(['Users.*', 'Positions.Title AS PositionTitle']);
        return view('/users/search', compact('users'));
    }
    public function create() {
        $positions = Position::where("IsActive", "=", true) -> get();
        return view("users.create",['positions'=>$positions]);
    }
    public function addToDB(Request $request) {
        $users= new User();
        $users -> Name = $request->input('Name');
        $users -> Surname = $request->input('Surname');
        $users -> PositionId = $request -> input('Position');
        $users -> Adress = $request->input('Adress');
        $users -> save();
        return redirect("/users");
    }
}
