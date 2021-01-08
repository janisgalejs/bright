<?php

namespace App\Http\Controllers;

use App\Models\Activity;

class HomeController extends Controller
{
    /**
     * Show home page with data
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function home()
    {
        return view('welcome')
            ->with([
                'activities' => Activity::all()
            ]);
    }

    /**
     * Show admin dashboard
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function dashboard()
    {
        return view('dashboard');
    }
}
