<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Course;

class AppController extends Controller
{
    public function index() {
        return view('library', ['courses' => Course::all()]);
        
    }
}
