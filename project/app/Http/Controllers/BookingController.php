<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Event;
use GuzzleHttp\Psr7\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BookingController extends Controller
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
        // dd($request);

        $customer_id  = Auth::user()->customers[0]->id;
        $event_id = $request->event_id;
        $event = Event::where('id', $event_id)->get();
        // dd($event);
        if ($event[0]->acceptance == true) {

            Booking::create([
                'event_id' => $event_id,
                'customer_id' => $customer_id,
                'isApproved' => true,
            ]);
        } else {
            Booking::create([
                'event_id' => $event_id,
                'customer_id' => $customer_id,
                'isApproved' => false,
            ]);
        }

        return redirect('/');
    }

    public function customerBookings()
    {
        $customer =
            $customer  = Auth::user()->customers[0];
        $events = $customer->load('bookings', 'bookings.event');
        return view('customer.customerBookings', [
            'customer' => $events,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $event = Event::with(
            'bookings',
            'bookings.customer',
            'bookings.customer.user'
        )->where('id', $request->event_id)
            ->whereHas(
                'bookings',
                function ($query) {
                    return $query->where('isApproved', "=", 1);
                }
            )
            ->first();
        



        return view('organizer.bookingRequest', [
            'event' => $event,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        $booking = Booking::find($booking->id);
        $booking->isApproved = 1;
        $booking->save();
        return redirect()->back()->with('success_message', 'Event updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
