<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class KlabController extends Controller
{
    public function index ()
    {
        $data=User::all();
        return view('home',compact('data'));
    }
}
