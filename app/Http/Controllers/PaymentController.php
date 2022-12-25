<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use Wavey\Sweetalert\Sweetalert;

class PaymentController extends Controller
{
    /**
     * Create the user's payment.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index(Request $request)
    {
        // dd(auth()->id());
        $request->merge(['user_id'=>auth()->id()]);
        // dd($request->all());
        Booking::create($request->all());
        return view('payment.index', compact('request'));
    }

    /**
     * Create the user's payment.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function show(Request $request)
    {
        return view('payment.view', compact('request'));
    }

    /**
     * Create the user's payment.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function online(Request $request)
    {
        $this->swal('online-payment');

        return back()->with('status', 'online-payment');
    }

    /**
     * Update the user's payment.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function cash(Request $request)
    {
        $this->swal('cash-payment');

        return back()->with('status', 'cash-payment');
    }

    public function swal($message)
    {
        return Sweetalert::success("Pilihan bayaran: " . $message, "Terima kasih!");
    }
}
