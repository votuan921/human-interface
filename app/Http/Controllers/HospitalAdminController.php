<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HospitalAdminController extends Controller
{
    public function index(){
        return view('HospitalAdmin.index');
    }

    public function doctor_info(){
        return view('HospitalAdmin.doctor_info');
    }

    public function staff_info(){
        return view('HospitalAdmin.staff_info');
    }

}