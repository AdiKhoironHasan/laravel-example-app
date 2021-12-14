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
            "active" => "authors",
            "authors" => User::all()
        ]);
    }

    public function show(User $author)
    {
        return view('posts', [
            "title" => "Posts By Author : $author->name",
            "active" => "posts",
            "posts" => $author->posts, //author dan category dipanggil di posts.blade.php
        ]);
    }
}
