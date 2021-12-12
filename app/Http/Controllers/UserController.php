<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        return view('authors', [
            "title" => "Authors",
            "authors" => User::all()
        ]);
    }

    public function show(User $author)
    {
        return view('posts', [
            "title" => "Posts By Author : $author->name",
            "posts" => $author->posts, //author dan category dipanggil di posts.blade.php
        ]);
    }
}
