<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view("order.index");
    }

    public function mobilelegends()
    {
        return view("order.mobilelegends");
    }

    public function freefire()
    {
        return view("order.freefire");
    }

    public function pubg()
    {
        return view("order.pubg");
    }
}
