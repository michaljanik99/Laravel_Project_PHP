<?php

namespace App\Http\Controllers;

use App\Models\InternalEvent;
use Illuminate\Http\Request;

class InternalEventsController extends Controller
{
    public function index()
    {
        $internalEvents = InternalEvent::where("IsActive", "=", true) -> get();
        return view("internalEvents.index", ["internalEvents" => $internalEvents]);
    }

    /*
        Pokazuje formularz edycji
    */
    public function edit($id) {
        $internalEvents = InternalEvent::find($id);
        return view("internalEvents.edit", ["internalEvents" => $internalEvents]);

    }

    public function update(Request $request, $id) {
        $internalEvent = InternalEvent::find($id);
        $internalEvent -> Title = $request->input('Title');
        $internalEvent -> Link = $request->input('Link');
        $internalEvent -> ShortDescription = $request -> input('ShortDescription');
        $internalEvent -> ContentHTML = $request->input('ContentHTML');
        $internalEvent -> save();
        return redirect("/wydarzenia-wewnetrzne");
    }

    public function delete($id) {
        $internalEvent = InternalEvent::find($id);
        $internalEvent -> IsActive = false;
        $internalEvent -> save();
        return redirect("/wydarzenia-wewnetrzne");
    }



    /*
        Pokazuje formularz nowe wydarzenia wew
    */

    public function create() {
        return view("internalEvents.create");
    }

    public function addToDB(Request $request) {
        $internalEvent = new InternalEvent();
        $internalEvent -> Title = $request->input('Title');
        $internalEvent -> Link = $request->input('Link');
        $internalEvent -> ShortDescription = $request -> input('ShortDescription');
        $internalEvent -> ContentHTML = $request->input('ContentHTML');
        $internalEvent -> IsPublic = true;
        $internalEvent -> IsActive = true;
        $internalEvent -> IsCancelled = false;
        $internalEvent -> PublishDateTime = date("y-m-d h:i:s");
        $internalEvent -> EventDateTime = date("y-m-d h:i:s");

        $internalEvent -> save();
        return redirect("/wydarzenia-wewnetrzne");
    }
}

