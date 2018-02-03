<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaraFlash;

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
    public function index()
    {
        LaraFlash::add()->content('Hello world!')->priority(6)->type('Info');
        LaraFlash::success('Yay it worked!');
        LaraFlash::danger('sdfsdfsdf');
        LaraFlash::snackbar('Click to continue');
        flash('yay', ['priority' => 100, 'type' => 'success']);

        return view('home');
    }
}
