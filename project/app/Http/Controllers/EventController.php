<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\Organizer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $organizer = Organizer::where('user_id', Auth::id())->get();



        if ($request->acceptance) {
            $auto = true;
        } else {
            $auto = false;
        };
        $validatedData = $request->validate(
            [
                'title' => 'required',
                'description' => 'required',
                'date' => 'required',
                'place' => 'required',
                'category_id' => 'required',
                'NDP' => 'required',
                'price' => 'required',




            ],
        );


        Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'place' => $request->place,
            'category_id' => $request->category_id,
            'NDP' => $request->NDP,
            'price' => $request->price,
            'organizer_id' =>  $organizer[0]->id,
            'acceptance' => $auto,
        ]);
        return redirect('/organizer');
        // return route('organizer');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        $categories = Category::All();
        $event = Event::where('id', $event->id)->get();
        return view('organizer.event', [
            'event' => $event,
            'categories' => $categories,
        ]);
    }
    public function show2(Event $event)
    {

        $event = Event::with('category')->where('id', $event->id)->get();
        return view('customer.event', [
            'event' => $event,

        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        // dd($request);
        $event = Event::find($event->id);
        if ($request->acceptance) {
            $auto = true;
        } else {
            $auto = false;
        };

        $event->title  = $request->title;
        $event->description  = $request->description;
        $event->date  = $request->date;
        $event->place  = $request->place;
        $event->category_id  = $request->category_id;
        $event->NDP  = $request->NDP;
        $event->price  = $request->price;

        $event->acceptance  = $auto;
        $event->save();
        return redirect('/organizer')->with('success', 'Event updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {

        $event->delete();
        return redirect('/organizer');
    }
}
