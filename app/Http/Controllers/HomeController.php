<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Config\Controller;
use Illuminate\Support\Facades\{Auth, Hash, Validator};
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
       return view('pages.home.index');
    }
}