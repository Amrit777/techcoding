<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function welcome()
    {
        $sliders = Slider::all();
        // $bootcamps = Category::all();
        // $courses = Course::all();
        // return View::composer(['welcome', 'frontend.layout.footer'], function ($view) {
        //     $view->with(
        //         'bootcamps', $bootcamps,
        //         'sliders' => $sliders,
        //         'courses' => $courses
        //     ); // bind data to view
        // });

        return view('welcome', compact('sliders'));
    }

    public function aboutUs()
    {
        return view('frontend.aboutus');
    }

    public function atl()
    {
        return view('frontend.labs.atl');
    }
    public function stem()
    {
        return view('frontend.labs.stem');
    }
    public function robotics()
    {
        return view('frontend.labs.robotics');
    }
    public function coding()
    {
        return view('frontend.labs.coding');
    }
    public function maths()
    {
        return view('frontend.labs.maths');
    }
    public function language()
    {
        return view('frontend.labs.language');
    }
    public function science()
    {
        return view('frontend.labs.science');
    }
    public function evs()
    {
        return view('frontend.labs.evs');
    }
}
