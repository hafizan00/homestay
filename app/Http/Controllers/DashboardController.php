<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookingResource;
use App\Models\Booking;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $store;

    public function index()
    {
        $this->fetch();

        $resource = $this->store->resource->all();

        return view('dashboard')->with('resource', $resource);
    }

    public function fetch()
    {
        $this->store = (new BookingController())->index();

        return $this;
    }
}
