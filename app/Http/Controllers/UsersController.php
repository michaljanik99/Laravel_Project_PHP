<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::where("IsActive", "=", true) -> get();
        return view("users.index", ["users" => $users]);
    }
    public function edit($id) {
        $users = User::find($id);
        return view("users.edit", ["users" => $users]);

    }
    public function update(Request $request, $id) {
        $users = User::find($id);
        $users -> Name = $request->input('Name');
        $users -> Surname = $request->input('Surname');
        $users -> Position = $request -> input('Position');
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
    public function create() {
        return view("users.create");
    }
    public function addToDB(Request $request) {
        $users= new User();
        $users -> Name = $request->input('Name');
        $users -> Surname = $request->input('Surname');
        $users -> Position = $request -> input('Position');
        $users -> Adress = $request->input('Adress');
        $users -> save();
        return redirect("/users");
    }
}
