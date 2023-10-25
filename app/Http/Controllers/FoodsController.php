<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// nhung Foods Model vao controller
use App\Models\Foods;

class FoodsController extends Controller
{
    public function index()
    {
        // $foods = Foods::all(); //select * from foods;
        // dd($foods);

        //filter
        $foods = Foods::where('name', '=', 'Trung chien')
            // ->get();
            ->firstOrFail(); //tra ve 1 item nen ko sd foreach
        return view('foods.index', [
            'foods' => $foods,
        ]);
    }

    // create function
    public function create()
    {
        //insert new food
        // dd('Dang o day');
        return view('foods.create');
    }
}
