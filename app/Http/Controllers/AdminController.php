<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index() {
        return view('pointakses/admin/index');
    }
    function data_pengguna() {
        return view('pointakses/admin/data_pengguna');
    }

}
