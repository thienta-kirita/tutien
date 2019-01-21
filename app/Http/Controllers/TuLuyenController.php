<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TuLuyenController extends Controller
{
    public function getTuLuyen(){
        return view('tuluyen.index');
    }

    public function getThongTin(){
        return view('tuluyen.thongtin');
    }

    public function getCongPhap(){
        return view('tuluyen.congphap');
    }

    public function getKyNang(){
        return view('tuluyen.kynang');
    }

    public function getThienTai(){
        return view('tuluyen.thientai');
    }

    public function getTuChat(){
        return view('tuluyen.tuchat');
    }

    public function getLuyenDan(){
        return view('tuluyen.luyendan');
    }

    public function getLuyenKhi(){
        return view('tuluyen.luyenkhi');
    }

    public function getTuiDo(){
        return view('tuluyen.tuido');
    }

    public function getThuCuoi(){
        return view('tuluyen.thucuoi');
    }


}
