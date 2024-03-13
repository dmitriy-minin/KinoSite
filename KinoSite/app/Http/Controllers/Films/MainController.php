<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Films\MainController;

class MainController extends Controller
{
    public function __invoke(Request $request){
        return view('layouts.admin');
    }
}
