<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Config\Controller;
use Illuminate\Support\Facades\{Auth, Hash, Validator};
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index() 
    {
        return redirect()->route('login');
    }
}