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

    public function aov()
    {
        return view("order.aov");
    }

    public function ragnarok()
    {
        return view("order.ragnarok");
    }

    public function cod()
    {
        return view("order.cod");
    }

    public function steam()
    {
        return view("order.steam");
    }

    public function megaxus()
    {
        return view("order.megaxus");
    }

    public function pb()
    {
        return view("order.pb");
    }

    public function hago()
    {
        return view("order.hago");
    }
}
