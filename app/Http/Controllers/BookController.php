<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Create the user's booking.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Request $request)
    {
        $request->price = 150;
        $validated = $request->validateWithBag('createBooking', [
            'full_name'     => ['bail', 'required', 'string'],
            'email'         => ['bail', 'required'],
            'adult_count'   => ['bail', 'required', 'between:0,5'],
            'child_count'   => ['bail', 'required', 'between:0,5'],
            'check_in'      => ['bail', 'required', 'date'],
            'check_out'     => ['bail', 'required', 'date'],
            'purpose'       => ['bail', 'required', 'string'],
            'price'         => ['bail', 'required', 'integer'],
        ]);

        Book::create($validated);

        return back()->with('status', 'booking-created');
    }

    /**
     * Update the user's booking.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        // dd($request);

        // $validated = $request->validateWithBag('updatePassword', [
        //     'current_password' => ['required', 'current_password'],
        //     'password' => ['required', Password::defaults(), 'confirmed'],
        // ]);

        // $request->user()->update([
        //     'password' => Hash::make($validated['password']),
        // ]);

        return back()->with('status', 'booking-updated');
    }
}
