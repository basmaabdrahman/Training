<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class DashboradController extends Controller
{
    public function index(){
        return view('dashboard.layouts.master');
    }

}
