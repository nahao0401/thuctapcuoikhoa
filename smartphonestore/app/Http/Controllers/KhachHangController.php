<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{
    public function getHome()
    {
        return view('user.home');
    }

    public function getDatHang()
    {
        // Bổ sung code tại đây
        return view('user.dathang');
    }
    
    public function postDatHang(Request $request)
    {
        // Bổ sung code tại đây
        return redirect()->route('user.dathangthanhcong');
    }

    public function getDatHangThanhCong()
    {
        return view('user.dathangthanhcong');
    }

    public function getDonHang($id = '')
    {
        // Bổ sung code tại đây
        return view('user.donhang');
    }

    public function postDonHang(Request $request, $id)
    {
        // Bổ sung code tại đây
    }

    public function getHoSoCaNhan()
    {
        // Bổ sung code tại đây
        return view('user.hosocanhan');
    }

    public function postHoSoCaNhan(Request $request)
    {
        // Bổ sung code tại đây
        return redirect()->route('user.home');
    }
    
    public function postDangXuat(Request $request)
    {
        // Bổ sung code tại đây
        return redirect()->route('frontend.home');
    }
}