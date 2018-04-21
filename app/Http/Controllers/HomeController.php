<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        
    }

    public function index()
    {
        $data['dashboard'] = 'Pawoon Dashboard';

        return view('dashboard', $data);
    }
}
