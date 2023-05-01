<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $kek = "keku";

        return view('register/index', compact('kek'));
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'string',
            'email' => 'string',
            'password' => 'string'
        ]);

        User::create($data);
    }

    public function show_user()
    {
        $user = User::find(1);
        dump($user);
        echo(User::basic_html());
        return;
    }
}
