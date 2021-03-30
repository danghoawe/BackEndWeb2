<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Helo extends Controller
{
    public function show($id="Trang-Chu")
    {
        if($id == "Trang-Chu")
        {
            return view('TrangChu');
        }
        if($id == "Gioi-Thieu")
        {
            return view('GioiThieu');
        }
        if($id == "Ban")
        {
            return view('Ban');
        }
        if($id == "Ghe")
        {
            return view('Ghe');
        }
        if($id == "San-Pham")
        {
            return view('SanPham');
        }
        if($id == "Lien-He")
        {
            return view('LienHe');
        }

    }
    public function showUser($id="test")
    {
        return "user ".$id;
    }
}
