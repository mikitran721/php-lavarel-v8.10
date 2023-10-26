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
        $foods = Foods::all(); //select * from foods;
        // dd($foods);

        //filter
        // $foods = Foods::where('name', '=', 'Trung chien')
        // ->get();
        // ->firstOrFail(); //tra ve 1 item nen ko sd foreach
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

    //store function - tao moi du lieu
    public function store(Request $request)
    {
        // dd('This is store function');
        /* $food = new Foods();
        $food->name = $request->input('name');
        $food->description = $request->input('description');
        $food->count = $request->input('count'); */

        $food = Foods::create([
            'name' => $request->input('name'),
            'count' => $request->input('count'),
            'description' => $request->input('description')
        ]); //ClassName::StaticMethod

        //save to DB
        $food->save();
        //redirect to foods after saving data
        return redirect('/foods');
    }

    // edit function
    public function edit($id)
    {
        // dd($id);
        $food = Foods::find($id);
        // dd($food);
        return view('foods.edit')->with('food', $food);
    }

    // update function
    public function update(Request $request, $id)
    {
        $food = Foods::where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'count' => $request->input('count'),
                'description' => $request->input('description')
            ]);
        return redirect('/foods');
    }

    // delete function
    public function destroy($id)
    {
        $food = Foods::find($id);
        $food->delete();
        // dd($id);
        return redirect('/foods');
    }
}
