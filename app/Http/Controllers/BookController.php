<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Booking;
use Wavey\Sweetalert\Sweetalert;

class BookController extends Controller
{
    /**
     * Update the user's booking.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index(Booking $bookings)
    {
        $bookings = $bookings->where('user_id', auth()->user()->id)->get();

        return view('bookings.index', compact('bookings'))->with('status', 'booking-updated');
    }

    /**
     * Update the user's booking.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function show(Booking $booking)
    {
        return view('bookings.show', compact('booking'))->with('status', 'booking-updated');
    }

    /**
     * Create the user's booking.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Request $request)
    {
        $request['price'] = 200;
        $request->validateWithBag('createBooking', [
            'full_name'     => ['bail', 'required', 'string'],
            'email'         => ['bail', 'required'],
            'adult_count'   => ['bail', 'required', 'between:0,5'],
            'child_count'   => ['bail', 'required', 'between:0,5'],
            'check_in'      => ['bail', 'required', 'date'],
            'check_out'     => ['bail', 'required', 'date'],
            'purpose'       => ['bail', 'required', 'string'],
            'price'         => ['bail', 'required', 'integer'],
        ]);

        // $booking = Booking::make($request->all());

        Sweetalert::success('Description', 'ur fukd');

        return view('payment.index', compact('request'))->with('status', 'booking-created');
        // return back()->with('status', 'booking-created');
    }

    /**
     * Update the user's booking.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {

        return back()->with('status', 'booking-updated');
    }
}
