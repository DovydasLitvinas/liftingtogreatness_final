<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PagesController extends Controller
{
    public function index(){
        return view('pages.home');
    }
    // public function paslaugos(){
    //   return view('pages.paslaugos');
    // }
    public function kontaktai(){
        return view('pages.kontaktai');
    }
    public function apie(){
        return view('pages.apie');
    }
    public function login2(){
        return view('pages.login_register');
    }
    public function password_reset(){
      return view('auth.passwords.email');
  }
    //Vartotojo valdykle
    public function paskyra(){
      return view('pages.paskyra');
    }
    //paslaugos
    public function mityba(){
      return view('pages.mityba');
    }
    public function sportoProgramos(){
      return view('pages.sporto-programos');
    }
    public function apranga(){
      return view('pages.apranga');
    }
    //Checkout
    public function mitybaCheckout(){
      return view('pages.mityba-survey');
    }
    public function checkout(){
      return view('pages.checkout');
    }
}
