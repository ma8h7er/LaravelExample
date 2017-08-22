<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    private function getSum($x, $y) {
         return $x + $y;
    }

    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function services()
    {
        return view('services');
    }
    public function portfolio()
    {
        return view('portfolio');
    }

    private function getLongNames($arr) {
        $longnames = [];

        foreach ($arr as $name) {
            if(strlen($name) > 6) {
                $longnames[] = $name;
            }
        }

        return $longnames;
    }
}
