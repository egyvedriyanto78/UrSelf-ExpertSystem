<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin | Home',
        ];
        return view('admin_home', $data);
    }

    public function users()
    {
        $data = [
            'title' => 'Admin | Users',
        ];
        return view('admin_users', $data);
    }

    public function report()
    {
        $data = [
            'title' => 'Admin | Report',
        ];
        return view('admin_report', $data);
    }

    public function feedback()
    {
        $data = [
            'title' => 'Admin | User Feedback',
        ];
        return view('admin_feedback', $data);
    }

    public function us()
    {
        $data = [
            'title' => 'Admin | About Us',
        ];
        return view('admin_us', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Admin | Contact',
        ];
        return view('admin_contact', $data);
    }
}
