<?php
use App\Http\Controllers\InternalEventsController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StronaController;

Route::get("/", StronaController::class);

Route::get("/wydarzenia-wewnetrzne", [InternalEventsController::class, "index"]);
Route::get("/wydarzenia-wewnetrzne/edycja/{id}", [InternalEventsController::class, "edit"]);
Route::post("/wydarzenia-wewnetrzne/aktualizacja/{id}", [InternalEventsController::class, "update"]);
Route::get("/wydarzenia-wewnetrzne/usuwanie/{id}", [InternalEventsController::class, "delete"]);
Route::get("/wydarzenia-wewnetrzne/nowe", [InternalEventsController::class, "create"]);
Route::post("/wydarzenia-wewnetrzne/dodaj", [InternalEventsController::class, "addToDB"]);

Route::get("/posty-wewnetrzne", [PostsController::class, "index"]);
Route::get("/posty-wewnetrzne/edycja/{id}", [PostsController::class, "edit"]);
Route::post("/posty-wewnetrzne/aktualizacja/{id}", [PostsController::class, "update"]);
Route::get("/posty-wewnetrzne/usuwanie/{id}", [PostsController::class, "delete"]);
Route::get("/posty-wewnetrzne/nowe", [PostsController::class, "create"]);
Route::post("/posty-wewnetrzne/dodaj", [PostsController::class, "addToDB"]);
