<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        return view('payment.index', compact('request'));
    }

    /**
     * Create the user's payment.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function online(Request $request)
    {
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
        return back()->with('status', 'cash-payment');
    }
}
