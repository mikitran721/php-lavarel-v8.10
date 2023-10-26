<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// nhung Foods Model vao controller
use App\Models\Foods;
use App\Models\Category;

//nhung & su dung Rules/Uppercase - tu tao
use App\Rules\Uppercase;

//nhung va su dung ValidationRequest tu tao
use App\Http\Requests\CreateValidationRequest;

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
        $categories = Category::all();
        return view('foods.create')->with('categories', $categories);
    }

    //store function - tao moi du lieu
    public function store(Request $request)
    // thay Request = Request tu tao
    // public function store(CreateValidationRequest $request)
    {
        // dd($request->all());
        // dd($request->file('image')->guessExtension()); //lay duoi file
        // dd($request->file('image')->getMimeType()); //lay kieu file & duoi file
        // dd($request->file('image')->getClientOriginalName()); //lay ten & duoi file
        // dd($request->file('image')->getSize()); //lay dung luong image theo kilobytes
        // dd($request->file('image')->getError()); //lay loi khi upload file
        // dd($request->file('image')->isValid()); //la anh hop le = true
        $request->validate([
            'name' => 'required',
            'count' => 'required|integer|min:0|max:200',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        /* client image's name and server's image name must be different */
        $generatedImageName = 'image' . time() . '-' . $request->name . '.' . $request->image->extension();
        // dd($generatedImageName);
        //move img to folder
        $request->image->move(public_path('images'), $generatedImageName);

        // dd('This is store function');
        /* $food = new Foods();
        $food->name = $request->input('name');
        $food->description = $request->input('description');
        $food->count = $request->input('count'); */
        // dd($request);

        //NEED VALIDATE DATE HERE
        //dong code o duoi ap dung khi su dung request mac dinh cua Laravel
        /* $request->validate([
            // 'name' => 'required|unique:foods',
            'name' => ['required', new Uppercase], //day la rule tu tao
            'count' => 'required|integer|min:0|max:1000',
            'category_id' => 'required',
        ]); */

        // ap dung khi su dung RequestValidation tu tao: khong can viet gi vi da khai bao trong Request roi
        // $request->validate();

        //if the validation is pass, it will come here
        //Otherwise it will throw an exception (ValidationException)
        $food = Foods::create([
            'name' => $request->input('name'),
            'count' => $request->input('count'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
            'image_path' => $generatedImageName
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
    public function update(CreateValidationRequest $request, $id)
    {
        $request->validate();
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

    // show detail
    public function show($id)
    {
        // dd("this is show detail $id");
        $food = Foods::find($id);
        $category = Category::find($food->category_id);
        $food->category = $category;
        // dd($food);
        // dd($food->name);
        return view('foods.show')->with('food', $food);
    }
}
