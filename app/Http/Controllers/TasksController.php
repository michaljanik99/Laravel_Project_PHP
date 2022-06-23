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
        $users = User::where("IsActive", "=", true) -> get();
        $priorityes = Priority::where("IsActive", "=", true) -> get();
        $sprints = Sprint::where("IsActive", "=", true) -> get();
        $tasks = Task::leftJoin('Users', 'Users.Id', '=', 'Tasks.UserId')->leftJoin('Priorityes', 'Priorityes.Id', '=', 'Tasks.PriorityId')->leftJoin('Sprints', 'Sprints.Id', '=', 'Tasks.SprintId')->where("Tasks.Id", "=", $id)->get(['Tasks.*', 'Users.Name AS UsersName','Users.Surname AS UsersSurname','Priorityes.Title As PriorityTitle','Sprints.Title As SprintTitle','Sprints.StartDateTime As SprintStart','Sprints.EndDateTime As SprintEnd'])->first();
        return view("tasks.edit", ["tasks" => $tasks,'users'=>$users,'priorityes'=>$priorityes,'sprints'=>$sprints]);
    }
    public function update(Request $request, $id) {
        $tasks = Task::find($id);
        $tasks -> Title = $request->input('Title');
        $tasks -> Description = $request->input('Description');
        $tasks -> SprintId  = $request->input('Sprint');
        $tasks -> PriorityId  = $request->input('Priority');
        $tasks -> UserId  = $request->input('User');
        $tasks -> save();
        return redirect("/tasks");
    }
    public function search(Request $request){
        $search = $request->input('search');
        $tasks = Task::leftJoin('Users', 'Users.Id', '=', 'Tasks.UserId')->leftJoin('Priorityes', 'Priorityes.Id', '=', 'Tasks.PriorityId')->leftJoin('Sprints', 'Sprints.Id', '=', 'Tasks.SprintId')->where("Tasks.IsActive", "=", true)->where('Tasks.Title', 'LIKE', "%{$search}%")->orWhere('Tasks.Description', 'LIKE', "%{$search}%")->get(['Tasks.*', 'Users.Name AS UsersName','Users.Surname AS UsersSurname','Priorityes.Title As PriorityTitle','Sprints.Title As SprintTitle','Sprints.StartDateTime As SprintStart','Sprints.EndDateTime As SprintEnd']);
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
