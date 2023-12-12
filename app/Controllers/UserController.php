<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
        ];
        return view('home', $data);
    }

    public function personality()
    {
        $data = [
            'title' => 'Personality Test',
        ];
        return view('personality', $data);
    }

    public function aptitude()
    {
        $data = [
            'title' => 'Aptitude Test',
        ];
        return view('aptitude', $data);
    }

    public function report()
    {
        $data = [
            'title' => 'Report',
        ];
        return view('report', $data);
    }

    public function us()
    {
        $data = [
            'title' => 'About Us',
        ];
        return view('us', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact',
        ];
        return view('contact', $data);
    }
}
