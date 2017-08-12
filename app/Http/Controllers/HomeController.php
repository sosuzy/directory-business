<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['business']);
        return view('home');
    }
    public function admin(Request $request)
    {
        $request->user()->authorizeRoles(['manager']);
        return view('admin.dashboard');
    }
    public function publisher(Request $request)
    {
        $request->user()->authorizeRoles(['publisher']);
        return view('publisher.home');
    }
    public function agent(Request $request)
    {
        $request->user()->authorizeRoles(['agent']);
        return view('agent.home');
    }
}
