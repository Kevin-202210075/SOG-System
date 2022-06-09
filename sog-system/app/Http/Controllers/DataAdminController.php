<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataAdmin;
use App\Models\User;

class DataAdminController extends Controller
{
    public function index()
    {
        return view('dataadmin', [
            "title" => "Data Admin",
            "data" => User::all()
        ]);
    }
}
