<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostDetailsController extends Controller
{
    public function postdetail(){
        return view('post_detail');
    }
}