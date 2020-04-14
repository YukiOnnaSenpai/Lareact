<?php

namespace App\Http\Controllers;

use App\Exceptions\CustomException;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function open() 
    {
        throw new CustomException();
    }

    public function closed() 
    {
        return response()->json(['message'=>'this data is for authenticated users only']);
    }
}
