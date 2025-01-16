<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('home');
    }
    public function lgnpages()
    {
        return view('login');
    }

    public function rek()
    {
        return view('rekening');
    }

    public function reg()
    {
        return view('register');
    }

    public function ver()
    {
        return view('verifikasi');
    }

    public function set()
    {
        return view('setlogin');
    }

    public function reset()
    {
        return view('resetpass');
    }

    public function ubah()
    {
        return view('ubahpass');
    }
}
