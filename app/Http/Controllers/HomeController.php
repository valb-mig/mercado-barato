<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Config\Controller;
use Illuminate\Support\Facades\{Auth, Hash, Validator};
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('pages.home.index',[
            'user' => $user
        ]);
    }
}