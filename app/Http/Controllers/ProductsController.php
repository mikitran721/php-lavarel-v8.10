<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        //how to pass data to view
        $title = 'Day la bien controller truyen xuong view';
        $x = 1;
        $y = 2;
        // return view('products.index', compact('title', 'x', 'y')); //return 1 doi tuong view
        $name = 'Poo';
        // return view('products.index')->with('name', $name);

        //send an associative array
        $myPhone = [
            'name' => 'iphone 14',
            'year' => 2022,
            'isFavorite' => true
        ];
        // return view('products.index', compact('myPhone'));

        //send directly
        return view('products.index', [
            'myPhone' => $myPhone
        ]);
    }

    //param with string
    public function detail11($productName)
    {
        // return 'Product id = ' . $id;
        $phones = [
            'iphone15' => 'iphone 15',
            'samsung' => 'samsung'
        ];
        return view('products.index', [
            'product' => $phones[$productName] ?? 'unknow product'
        ]);
    }

    // how to validate 'id' only integer
    public function detail($productName, $id)
    {
        return "Product ID: " . $id
            . ". Product name: " . $productName;
    }

    public function about()
    {
        return 'This is About page - Products route.';
    }
}
