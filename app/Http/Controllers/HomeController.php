<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getSimpleView($first_name) 
    {
        return view('simple', ['first_name' => $first_name]);
    }

    public function getWelcome() 
    {
        return view('welcome');
    }

    public function postWelcome() 
    {
        return view('welcome');
    }

    public function putWelcome() 
    {
        return view('welcome');
    }

    public function patchWelcome() 
    {
        return view('welcome');
    }

    public function deleteWelcome() 
    {
        return view('welcome');
    }
}
