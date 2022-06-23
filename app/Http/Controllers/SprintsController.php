<?php

namespace App\Http\Controllers;

use App\Models\Sprint;
use App\Models\User;
use Illuminate\Http\Request;

class SprintsController extends Controller
{
    public function index()
    {
        $sprints = Sprint::leftJoin('Users', 'Users.Id', '=', 'Sprints.CreatedById')->where("Sprints.IsActive", "=", true)->get(['Sprints.*', 'Users.Name AS UsersName','Users.Surname AS UsersSurname']);
        return view("sprints.index", ["sprints" => $sprints]);
    }
    public function edit($id) {
        $users = User::where("IsActive", "=", true) -> get();
        $sprints = Sprint::leftJoin('Users', 'Users.Id', '=', 'Sprints.CreatedById')->where("Sprints.Id", "=", $id)->first(['Sprints.*', 'Users.Id AS UsersId']);
        return view("sprints.edit", ["sprints" => $sprints,'users'=>$users]);
    }
    public function update(Request $request, $id) {
        $request->validate([
            'Title' => 'required|max:256',
            'StartDate' => 'required|date',
            'StartTime' => 'required|date_format:H:i',
            'EndDate' => 'required|date|after:StartDate',
            'EndTime' => 'required|date_format:H:i|after:StartTime',
            'User' => 'required|integer',
        ]);
        $sprints = Sprint::find($id);
        $sprints -> Title = $request->input('Title');
        $sprints -> StartDateTime = date("Y-m-d G:i:s",strtotime($request->input('StartDate')." ".$request->input('StartTime')));
        $sprints -> EndDateTime = date("Y-m-d G:i:s",strtotime($request->input('EndDate')." ".$request->input('EndTime')));
        $sprints -> CreatedById = $request->input('User');
        $sprints -> save();
        return redirect("/sprints");
    }
    public function delete($id) {
        $sprints = Sprint::find($id);
        $sprints -> IsActive = false;
        $sprints -> save();
        return redirect("/sprints");
    }
    public function search(Request $request){
        $search = $request->input('search');
        $sprints = Sprint::leftJoin('Users', 'Users.Id', '=', 'Sprints.CreatedById')->where("Sprints.IsActive", "=", true)->where('Sprints.Title', 'LIKE', "%{$search}%")->get(['Sprints.*', 'Users.Name AS UsersName','Users.Surname AS UsersSurname']);
        return view('/sprints/search', compact('sprints'));
    }
    public function create() {
        $users = User::where("IsActive", "=", true) -> get();
        return view("sprints.create",['users'=>$users]);
    }
    public function addToDB(Request $request) {
        $sprints= new Sprint();
        $request->validate([
            'Title' => 'required|max:256',
            'StartDate' => 'required|date',
            'StartTime' => 'required|date_format:H:i',
            'EndDate' => 'required|date|after:StartDate',
            'EndTime' => 'required|date_format:H:i|after:StartTime',
            'User' => 'required|integer',
        ]);
        $sprints -> Title = $request->input('Title');
        $sprints -> CreationDateTime = date("Y-m-d G:i:s");
        $sprints -> StartDateTime = date("Y-m-d G:i:s",strtotime($request->input('StartDate')." ".$request->input('StartTime')));
        $sprints -> EndDateTime = date("Y-m-d G:i:s",strtotime($request->input('EndDate')." ".$request->input('EndTime')));
        $sprints -> CreatedById = $request->input('User');
        $sprints-> save();
        return redirect("/sprints");
    }
}
