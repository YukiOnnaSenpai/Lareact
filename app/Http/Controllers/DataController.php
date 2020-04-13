<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function open() 
    {
        return response()->json(['res'=>'this data is open for all users']);
    }

    public function closed() 
    {
        return response()->json(['res'=>'this data is for authenticated users only']);
    }
}
