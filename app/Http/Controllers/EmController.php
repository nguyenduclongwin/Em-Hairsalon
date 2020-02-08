<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class EmController extends Controller
{
    public function home(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function service(){
        return view('service');
    }
    public function contact(){
        return view('contact');
    }
    public function news(){
        return view('news');
    }
    public function emShop(){
        return view('emshop');
    }
    public function cart()
    {
        return view('cart');
    }
    
    public function updateCart(Request $request)
    {
        if ($request->id and $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart update successfully');
        }
    }
    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Cart removed successfully');
        }
    }
}
