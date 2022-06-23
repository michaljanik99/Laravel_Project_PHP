<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StronaController;
Use App\Http\Controllers\UsersController;
Use App\Http\Controllers\PriorityesController;
Use App\Http\Controllers\SprintsController;
Use App\Http\Controllers\TasksController;
Use App\Http\Controllers\PositionsController;
Route::get("/", StronaController::class);

Route::get("/users", [UsersController::class, "index"]);
Route::get("/users/edit/{id}", [UsersController::class, "edit"]);
Route::post("/users/update/{id}", [UsersController::class, "update"]);
Route::get("/users/delete/{id}", [UsersController::class, "delete"]);
Route::get("/users/new", [UsersController::class, "create"]);
Route::post("/users/add", [UsersController::class, "addToDB"]);
Route::get("/users/search", [UsersController::class, "search"]);

Route::get("/priorityes", [PriorityesController::class, "index"]);
Route::get("/priorityes/edit/{id}", [PriorityesController::class, "edit"]);
Route::post("/priorityes/update/{id}", [PriorityesController::class, "update"]);
Route::get("/priorityes/delete/{id}", [PriorityesController::class, "delete"]);
Route::get("/priorityes/new", [PriorityesController::class, "create"]);
Route::post("/priorityes/add", [PriorityesController::class, "addToDB"]);
Route::get("/priorityes/search", [PriorityesController::class, "search"]);

Route::get("/sprints", [SprintsController::class, "index"]);
Route::get("/sprints/edit/{id}", [SprintsController::class, "edit"]);
Route::post("/sprints/update/{id}", [SprintsController::class, "update"]);
Route::get("/sprints/delete/{id}", [SprintsController::class, "delete"]);
Route::get("/sprints/new", [SprintsController::class, "create"]);
Route::post("/sprints/add", [SprintsController::class, "addToDB"]);
Route::get("/sprints/search", [SprintsController::class, "search"]);

Route::get("/tasks", [TasksController::class, "index"]);
Route::get("/tasks/edit/{id}", [TasksController::class, "edit"]);
Route::post("/tasks/update/{id}", [TasksController::class, "update"]);
Route::get("/tasks/delete/{id}", [TasksController::class, "delete"]);
Route::get("/tasks/new", [TasksController::class, "create"]);
Route::post("/tasks/add", [TasksController::class, "addToDB"]);
Route::get("/tasks/search", [TasksController::class, "search"]);

Route::get("/positions", [PositionsController::class, "index"]);
Route::get("/positions/edit/{id}", [PositionsController::class, "edit"]);
Route::post("/positions/update/{id}", [PositionsController::class, "update"]);
Route::get("/positions/delete/{id}", [PositionsController::class, "delete"]);
Route::get("/positions/new", [PositionsController::class, "create"]);
Route::post("/positions/add", [PositionsController::class, "addToDB"]);
Route::get("/positions/search", [PositionsController::class, "search"]);
