<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PagesController extends Controller
{
    public function index(){
        return view('pages.home');
    }
    public function apie(){
        return view('pages.apie');
    }
    public function kontaktai(){
        return view('pages.kontaktai');
    }
    public function login2(){
        return view('pages.login_register');
    }
}
