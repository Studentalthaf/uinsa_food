<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Menu;

class HomeController extends Controller
{
    public function index(){
        $menus = Menu::all();
        $order = session()->get('order', []);
        $total = 0;

        foreach ($order as $id => $order_detail) {
            $subtotal = isset($order_detail['subtotal']) ? $order_detail['subtotal'] : 0;
            $subtotal += $order_detail['quantity'] * $order_detail['menu_price'];
            $order[$id]['subtotal'] = $subtotal;
            $total += $subtotal;
        }
        session()->put('order', $order);  // Update the session with new subtotal values

    return view('frontend.customer.homepage', compact('menus', 'order', 'total'));

    }
    public function menu(){
        $menus = Menu::all();

        return view('frontend.customer.page.page_menu', compact('menus'));
    }
    public function about(){
        return view('frontend.customer.page.page_about');
    }
    public function contact(){
        return view('frontend.customer.page.page_contact');
    }

}