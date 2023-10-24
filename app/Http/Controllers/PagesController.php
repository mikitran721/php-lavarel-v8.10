<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        $name = 'Poo';
        //$names = [];
        $names = array('Poo', 'Phoong', 'Ben', 'Tom');
        //return view('about')->with('name', $name); //truyen bien sang view
        return view('about', [
            'names' => $names,
            'name' => $name,
        ]);
    }
}
