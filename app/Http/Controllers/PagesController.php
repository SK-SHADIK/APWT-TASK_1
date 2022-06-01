<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //FOR HOME PAGE
    function home(){
       
        return view('home');
    }
    function Our_teams(){
       
        return view('Our teams');
    }
    function about_us(){
       
        return view('about us');
    }
    function contact_us(){
       
        return view('contact us');
    }
}
