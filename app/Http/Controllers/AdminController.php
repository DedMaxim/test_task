<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function index()
    {
        $categories = Category::all();
        $items = Item::all();
        $users = User::all();
        $orders = Order::all();

        return view('admin', compact('categories','items','users','orders'));
    }

    public function store_category()
    {
        $data = request()->validate([
            'name' => 'string'
        ]);

        Category::create($data);
    }

    public function store_item()
    {
        $data = request()->validate([
            'name' => 'string',
            'price' => 'numeric',
            'image' => 'string'
        ]);

        Item::create($data);
    }

    public function store_order()
    {
        $data = request()->validate([
            'item_name' => 'string',
            'customer_name' => 'string',
            'status' => 'numeric'
        ]);

        Order::create($data);
    }

    public function store_customer()
    {
        $data = request()->validate([
            'name' => 'string',
            'email' => 'string',
            'permission_level' => 'numeric'
        ]);

        User::create($data);
    }
}
