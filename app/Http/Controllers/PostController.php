<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('search');
    }

    public function search(Request $request): \Illuminate\Http\JsonResponse
    {
        $data = Post::select("title")
            ->where("title","LIKE","%".$request->title."%")
            ->get();

        return response()->json($data->pluck('title')->toArray());
    }
}
