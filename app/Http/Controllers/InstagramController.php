<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use vinkla\snstagram\src\Instagram;

class InstagramController extends Controller
{
    public function instagramFeed()
    {
        $response = Instagram::users('le.dovis')->getMedia();
        $instagrams = $response->get();
        return view('instagram', compact('instagrams'));
    }
}
