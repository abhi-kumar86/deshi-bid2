<?php

namespace App\Http\Controllers;

use App\Models\AdminControl;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $settings = AdminControl::all();
        return view('admin.index', compact('settings'));
    }

    public function update(Request $request, AdminControl $control)
    {
        $control->update($request->all());
        return redirect()->route('admin.index');
    }
}
