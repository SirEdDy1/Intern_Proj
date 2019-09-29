<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
     function dashboard(){
        return view('admin.dashboard');
    }
    function login(){
        return view('admin.login');
    }
    function managegallery(){
        return view('admin.managegallery');
    }
    function managepost(){
        return view('admin.managepost');
    }
    function editpost(){
        return view('admin.editpost');
    }
    function managedocument(){
        return view('admin.managedocument');
    }
}
