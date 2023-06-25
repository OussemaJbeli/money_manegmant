<?php

namespace App\Http\Controllers;
use App\Models\Home;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return redirect()->route('home.page');
    }
}
