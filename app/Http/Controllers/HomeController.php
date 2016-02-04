<?php

namespace App\Http\Controllers;

use GrahamCampbell\GitHub\Facades\GitHub;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('index', [
            'repos' => collect(GitHub::me()->repositories()),
        ]);
        dd(GitHub::me()->repositories());
    }
}
