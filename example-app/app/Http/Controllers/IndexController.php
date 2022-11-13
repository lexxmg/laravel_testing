<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class IndexController extends Controller
{
    public function index()
    {
        $result = DB::table('users')
            ->leftJoin('phones', 'phones.id', '=', 'users.phone_id')
            ->select('users.name', 'phones.phone')
            ->get();

        $posts = Post::limit(3)->get();

        //dd($posts[0]->title);

        return view('layout', ['posts' => $posts]);
    }
}
