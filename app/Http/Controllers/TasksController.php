<?php

namespace App\Http\Controllers;
use App\Models\Priority;
use App\Models\Sprint;
use App\Models\User;
use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::leftJoin('Users', 'Users.Id', '=', 'Tasks.UserId')->leftJoin('Priorityes', 'Priorityes.Id', '=', 'Tasks.PriorityId')->leftJoin('Sprints', 'Sprints.Id', '=', 'Tasks.SprintId')->where("Tasks.IsActive", "=", true)->get(['Tasks.*', 'Users.Name AS UsersName','Users.Surname AS UsersSurname','Priorityes.Title As PriorityTitle','Sprints.Title As SprintTitle','Sprints.StartDateTime As SprintStart','Sprints.EndDateTime As SprintEnd']);
        return view("tasks.index", ["tasks" => $tasks]);
    }
    public function edit($id) {
        $status = ["To Do","In Progress","Blocked","Done"];
        $users = User::where("IsActive", "=", true) -> get();
        $priorityes = Priority::where("IsActive", "=", true) -> get();
        $sprints = Sprint::where("IsActive", "=", true) -> get();
        $tasks = Task::leftJoin('Users', 'Users.Id', '=', 'Tasks.UserId')->leftJoin('Priorityes', 'Priorityes.Id', '=', 'Tasks.PriorityId')->leftJoin('Sprints', 'Sprints.Id', '=', 'Tasks.SprintId')->where("Tasks.Id", "=", $id)->get(['Tasks.*', 'Users.Name AS UsersName','Users.Surname AS UsersSurname','Priorityes.Title As PriorityTitle','Sprints.Title As SprintTitle','Sprints.StartDateTime As SprintStart','Sprints.EndDateTime As SprintEnd'])->first();
        return view("tasks.edit", ["tasks" => $tasks,'users'=>$users,'priorityes'=>$priorityes,'sprints'=>$sprints,'status'=>$status]);
    }
    public function update(Request $request, $id) {
        $request->validate([
            'Title' => 'required|max:256',
            'Description' => 'required|max:256',
            'Sprint' => 'required|integer',
            'Status' => 'required|max:64',
            'Priority' => 'required|integer',
            'User' => 'required|integer',
        ]);
        $tasks = Task::find($id);
        $tasks -> Title = $request->input('Title');
        $tasks -> Description = $request->input('Description');
        $tasks -> SprintId  = $request->input('Sprint');
        $tasks -> PriorityId  = $request->input('Priority');
        $tasks -> Status  = $request->input('Status');
        $tasks -> UserId  = $request->input('User');
        $tasks -> save();
        return redirect("/tasks");
    }
    public function search(Request $request){
        $search = $request->input('search');
        $tasks = Task::leftJoin('Users', 'Users.Id', '=', 'Tasks.UserId')->leftJoin('Priorityes', 'Priorityes.Id', '=', 'Tasks.PriorityId')->leftJoin('Sprints', 'Sprints.Id', '=', 'Tasks.SprintId')->where("Tasks.IsActive", "=", true)->where(function($query) use ($search){
            $query->where('Tasks.Title', 'LIKE', "%$search%");
            $query->orWhere('Tasks.Description', 'LIKE', "%$search%");
        })->get(['Tasks.*', 'Users.Name AS UsersName','Users.Surname AS UsersSurname','Priorityes.Title As PriorityTitle','Sprints.Title As SprintTitle','Sprints.StartDateTime As SprintStart','Sprints.EndDateTime As SprintEnd']);
        return view('/tasks/search', compact('tasks'));
    }
    public function delete($id) {
        $tasks = Task::find($id);
        $tasks -> IsActive = false;
        $tasks -> save();
        return redirect("/tasks");
    }
    public function create() {
        $users = User::where("IsActive", "=", true) -> get();
        $priorityes = Priority::where("IsActive", "=", true) -> get();
        $sprints = Sprint::where("IsActive", "=", true) -> get();
        return view("tasks.create",['users'=>$users,'priorityes'=>$priorityes,'sprints'=>$sprints]);
    }
    public function addToDB(Request $request) {
        $request->validate([
            'Title' => 'required|max:256',
            'Description' => 'required|max:256',
            'Sprint' => 'required',
            'Priority' => 'required',
            'User' => 'required',
        ]);
        $tasks= new Task();
        $tasks -> Title = $request->input('Title');
        $tasks -> Description = $request->input('Description');
        $tasks -> CreationDateTime = date("Y-m-d G:i:s");
        $tasks -> SprintId  = $request->input('Sprint');
        $tasks -> PriorityId  = $request->input('Priority');
        $tasks -> UserId  = $request->input('User');
        $tasks-> save();
        return redirect("/tasks");
    }
}
