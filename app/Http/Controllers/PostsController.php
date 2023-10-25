<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index()
    {
        // $posts = DB::select("SELECT * FROM posts where id=4;");

        //tranh truong hop hacker gui sql drop table;
        //query builders
        // $posts = DB::select('select * from posts where id=:id', [
        //     'id' => 3,
        // ]);
        $posts = DB::table('posts')
            ->where('id', '=', 5)
            ->delete();

        // ->where('id', '=', 5)
        // ->update([
        //     'title' => 'Update title',
        //     'body' => 'Update body'
        // ]);

        // ->insert([
        //     'title' => 'Poo',
        //     'body' => 'My cute dog'
        // ]);

        // ->whereNotNull("created_at")
        // ->avg('id');
        // ->sum('id');
        // ->min('id');
        // ->max('id');
        // ->count();
        // ->find(3); //theo id
        // ->oldest()
        // ->latest() //moi duoc tao
        // ->orderBy('id', 'desc')
        // ->whereBetween('id', [2, 3])
        // ->where('id', 3)
        // ->where('created_at', '>', now()->subDay())
        // ->orWhere('id', '>', 1)
        // ->select('title', 'body')
        //->first();
        // ->get();
        dd($posts); //tuong tu lenh print_r cua php; dd = detail dump
        //return view('posts.index');
    }
}
