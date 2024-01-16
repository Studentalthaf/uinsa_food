<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index() {
        return view('pointakses/user/index');
    }
    function order_page() {
        return view('pointakses/user/page/order_page');
    }
}
