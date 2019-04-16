<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nutritionInfoController extends Controller
{
    protected function create(array $data) {
        if(Auth::check()){
    
        }
        else {
            return redirect('/login');
            echo "<script type='text/javascript'>alert('Turite prisijungti, kad galėtumėte pirkti.');</script>";
        }
    }
}