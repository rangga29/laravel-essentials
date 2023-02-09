<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        return "All Users";
    }

    public function show($id = null)
    {
        return "User " . $id;
    }
}
