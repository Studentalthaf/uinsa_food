<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Menu;

class UserController extends Controller
{
    public function index() {
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
        return view('pointakses/user/index', compact('menus', 'order', 'total'));
    }
    public function menu_user(){
        $menus = Menu::all();

        return view('pointakses/user/page_menu', compact('menus'));
    }
    public function about_user(){
        return view('pointakses/user/page_about');
    }
    public function contact_user(){
        return view('pointakses/user/page_contact');
    }
    public function menuOrder(){
        return view('pointakses/user/order');
    }

    public function addMenutoOrder($id)
    {
        $menu = Menu::findOrFail($id);
        $order = session()->get('order', []);
        if(isset($order[$id])) {
            $order[$id]['quantity']++;
            $order[$id]['subtotal'] = $order[$id]['quantity'] * $order[$id]['menu_price'];
        } else {
            $order[$id] = [
                "menu_name" => $menu->menu_name,
                "quantity" => 1,
                "menu_price" => $menu->menu_price,
                "menu_desc" => $menu->menu_desc,
                "subtotal" =>$menu->menu_price
            ];
        }
        session()->put('order', $order);
        return redirect()->back()->with('success', 'Menu has been added to order!');
    }
    
    public function updateorder(Request $request)
    {
        if ($request->id && $request->quantity) {
            $order = session()->get('order');
    
            if (isset($order[$request->id])) {
                $order[$request->id]["quantity"] = $request->quantity;
                // Recalculate subtotal when updating quantity
                $order[$request->id]["subtotal"] = $request->quantity * $order[$request->id]["menu_price"];
                session()->put('order', $order);
                session()->flash('success', 'Product quantity updated.');
            }
        }
    }
  
    public function deleteMenu(Request $request)
    {
        if($request->id) {
            $order = session()->get('order');
            if(isset($order[$request->id])) {
                unset($order[$request->id]);
                session()->put('order', $order);
            }
            session()->flash('success', 'Menu successfully deleted.');
        }
    }
}
