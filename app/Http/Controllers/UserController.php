<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use > models
use App\Models\User;

class UserController extends Controller
{
    public function showRecipients( $id ) {
        $users = User::all();
        $thing_id = $id;
        return view('pages/recipients', ['users' => $users, 'thing_id' => $id]);
    }
}
