<?php

namespace App\Http\Controllers;

use App\Models\BuyNow;
use Illuminate\Http\Request;

class BuyNowController extends Controller
{
    public function index()
    {
        $buynows = BuyNow::all();
        return view('buy_now.index', compact('buynows'));
    }

    public function store(Request $request)
    {
        BuyNow::create($request->all());
        return redirect()->route('buy_now.index');
    }
}
