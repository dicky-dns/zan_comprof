<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CharityController extends Controller
{
    public function index()
    {
        return view('charity.detail-charity');
    }
}
