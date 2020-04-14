<?php

namespace App\Http\Controllers;

use App\Exceptions\CustomException;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function open() 
    {
        //return response()->json(['message'=>'this data is open for all users']);
        return new CustomException();
    }

    public function closed() 
    {
        return response()->json(['message'=>'this data is for authenticated users only']);
    }
}
