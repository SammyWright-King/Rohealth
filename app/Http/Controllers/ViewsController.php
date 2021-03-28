<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    //return view
    function signup(){
        return view('sign_up');
    }

    //return login
    function login(){
        return view('sign_in');
    }

    //return dashboard
    function dashboard(){
        return view('get_started');
    }

    //return employees
    function employees(){
        return view('employees');
    }

    //return payments
    function payments(){
        return view('payments');
    }

    //return settings
    function settings(){
        return view('settings');
    }
}
