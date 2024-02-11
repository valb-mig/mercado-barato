<?php

namespace App\Http\Controllers\Pages\Home;

use App\Helpers\Pages\Home\HomeHelper;
use App\Http\Controllers\Config\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Setores;

class HomeController extends Controller
{
    public function index()
    {
        $homeHelper = new HomeHelper();

        return view('pages.home.index',[
            'user'          => Auth::user(),
            'setores'       => Setores::all(),
            'timeGreetings' => $homeHelper->getGreetings()
        ]);
    }
}