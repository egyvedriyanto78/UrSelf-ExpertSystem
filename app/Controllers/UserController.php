<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\PersonalityModel;

class UserController extends BaseController
{
    public $userModel;
    public $psyModel;
    private $profile;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->psyModel = new PersonalityModel();
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

    public function psy()
    {
        $skor1 = $this->request->getPost('soal1');
        $skor2 = $this->request->getPost('soal2');
        $skor3 = $this->request->getPost('soal3');
        $skor4 = $this->request->getPost('soal4');
        $skor5 = $this->request->getPost('soal5');
        $skor6 = $this->request->getPost('soal6');
        $skor7 = $this->request->getPost('soal7');
        $skor8 = $this->request->getPost('soal8');
        $skor9 = $this->request->getPost('soal9');
        $skor10 = $this->request->getPost('soal10');
        $skor11 = $this->request->getPost('soal11');
        $skor12 = $this->request->getPost('soal12');
        $skor13 = $this->request->getPost('soal13');
        $skor14 = $this->request->getPost('soal14');
        $skor15 = $this->request->getPost('soal15');
        $skor16 = $this->request->getPost('soal16');
        $skor17 = $this->request->getPost('soal17');
        $skor18 = $this->request->getPost('soal18');
        $skor19 = $this->request->getPost('soal19');
        $skor20 = $this->request->getPost('soal20');

        $totalSkorIE = $skor1 + $skor2 + $skor3 + $skor4 + $skor5;
        $totalSkorSN = $skor6 + $skor7 + $skor8 + $skor9 + $skor10;
        $totalSkorTF = $skor11 + $skor12 + $skor13 + $skor14 + $skor15;
        $totalSkorJP = $skor16 + $skor17 + $skor18 + $skor19 + $skor20;

        $data = [
            'date' => $this->request->getPost('tanggal'),
            'name' => $this->request->getPost('nama'),
            'ie' => $totalSkorIE,
            'sn' => $totalSkorSN,
            'tf' => $totalSkorTF,
            'jp' => $totalSkorJP
        ];

        $this->psyModel->insert($data);

        return redirect()->to('/report');
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
            'profile' => $this->profile,
            'psy' => $this->psyModel->getPersonality()
        ];
        return view('report', $data);
    }

    public function deletePsy($id)
    {
        $result = $this->psyModel->deletePersonality($id);
        if (!$result) {
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }
        return redirect()->back()->with('success', 'Berhasil menghapus data');
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
