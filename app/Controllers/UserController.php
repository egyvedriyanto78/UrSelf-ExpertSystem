<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
    public $userModel;
    private $profile;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->profile = $this->userModel->getProfile(1);
    }

    public function profile($id)
    {
        $data = [
            'title' => 'Profile',
            'profile' => $this->profile
        ];

        return view('profile', $data);
    }

    public function update_profile($id)
    {
        $path = 'user/images/profile/';

        $photo = $this->request->getFile('photo');

        if ($photo->isValid()) {
            $name = $photo->getRandomName();

            if ($photo->move($path, $name)) {
                $photo_path = base_url($path . $name);
            }
        }

        $data = [
            'username' => $this->request->getVar('username'),
            'photo' => $photo_path
        ];

        $result = $this->userModel->updateProfile($data, $id);

        if (!$result) {
            return redirect()->back()->withInput()
                ->with('error', 'Gagal Menyimpan data');
        }

        return redirect()->back();
    }

    public function deletePhoto($id)
    {
        $this->userModel->deletePhotoProfile($id);
        return redirect()->back();
    }

    public function index()
    {
        $data = [
            'title' => 'Home',
            'profile' => $this->profile
        ];
        return view('home', $data);
    }

    public function personality()
    {
        $data = [
            'title' => 'Personality Test',
            'profile' => $this->profile
        ];
        return view('personality', $data);
    }

    public function aptitude()
    {
        $data = [
            'title' => 'Aptitude Test',
            'profile' => $this->profile
        ];
        return view('aptitude', $data);
    }

    public function report()
    {
        $data = [
            'title' => 'Report',
            'profile' => $this->profile
        ];
        return view('report', $data);
    }

    public function feedback()
    {
        $data = [
            'title' => 'Feedback',
            'profile' => $this->profile
        ];
        return view('feedback', $data);
    }

    public function us()
    {
        $data = [
            'title' => 'About Us',
            'profile' => $this->profile
        ];
        return view('us', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact',
            'profile' => $this->profile
        ];
        return view('contact', $data);
    }
}
