<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
    public function index()
    {
        return view('service-one-page');
    }
    public function about()
    {
        return view('about-page');
    }
    public function serviceOne()
    {
        return view('service-one-page');
    }
    public function serviceTwo()
    {
        return view('service-two-page');
    }
    public function serviceThree()
    {
        return view('service-three-page');
    }
}
