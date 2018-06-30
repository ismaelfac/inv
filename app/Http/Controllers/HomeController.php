<?php

namespace App\Http\Controllers;

use App\User;
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
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    function index()
    {
        $user = auth()->User()->name;
        return view('website.content',compact('user'));
    }
    function about()
    {
        return view('website.about_us');
    }
    function brand()
    {
        return view('website.brand');
    }
    function properties()
    {
        return view('website.properties');
    }
    function propertiesDetails(){
        return view('website.properties_details');
    }
    function propertyIncome(){
        return view('website.property_income');
    }
    function blog()
    {
        return view('website.blog');
    }
    function contact()
    {
        return view('website.contact');
    }
  
}
