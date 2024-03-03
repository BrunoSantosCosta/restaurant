<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

use Carbon\Carbon;
class HomeController extends Controller
{
    public function index()
    {
        $todaySale = Order::whereDate('created_at', Carbon::today())->sum('total');
        $todayOrder = Order::whereDate('created_at', Carbon::today())->count();
        $pendinnOrder = Order::where('order_status', 0)->count();
        $orders = Order::latest('created_at')->limit(5)->get();
      //  $reservations = Reserve::latest('created_at')->limit(5)->get();
        return view('dashboard', compact('todaySale', 'todayOrder', 'pendinnOrder', 'orders'));
    }
}
