<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use illuminate\http\Request;

class RipalController extends Controller {


    public function home()
    {
        return view("home0211");
    }
    public function artikel()
    {
        return view("artikel0211");
    }
    public function contactus()
    {
        return view("contactus0211");
    }
}