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
        return view('author', [
            "title" => "Author Posts",
            "author" => $author->name,
            "posts" => $author->posts
        ]);
    }
}
