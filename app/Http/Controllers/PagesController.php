<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    private $orders = [
        1 => ['id' => 1, 'dish' => 'Pizza Margherita', 'quantity' => 2, 'price' => 15, 'status' => 'Pending'],
        2 => ['id' => 2, 'dish' => 'Spaghetti Carbonara', 'quantity' => 1, 'price' => 12, 'status' => 'Completed'],
        3 => ['id' => 3, 'dish' => 'Caesar Salad', 'quantity' => 3, 'price' => 8, 'status' => 'Shipped'],
    ];
    public function main() {
        return view('main');
    }
    public function services() {
        return view('services');
    }
    public function order($id)
    {
        $order = $this->orders[$id] ?? null;

        if (!$order) {
            abort(404, 'Order not found');
        }

        return view('order.show', ['order' => $order]);
    }
    public function about() {
        return view('about');
    }
    public function contacts() {
        return view('contacts');
    }
    public function profile() {
        return view('profile');
    }
    public function showSpecialPage()
    {
       return view('special-page');
    }
}

