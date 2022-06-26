<?php

namespace App\Http\Controllers;

use App\Models\Angkot;
use App\Models\Perjalanan;
use App\Models\Sopir;
use App\Models\Trayek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    protected $user;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            View::share('user', $this->user);

            return $next($request);
        });

        // if (Auth::check()) {
        //   $user = Auth::user();

        // }
    }


    public function loggingOut()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sopir = Sopir::all();
        $trayek = Trayek::all();
        $angkot = Angkot::all();
        $perjalanan = Perjalanan::all();
        return view('pages.default_dashboard', ["sopirs" => $sopir, "trayeks" => $trayek, "angkots" => $angkot, "perjalanans" => $perjalanan]);
    }
}
