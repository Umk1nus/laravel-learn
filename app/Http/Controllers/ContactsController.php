<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ContactsController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('contacts', compact('posts'));
    }

}
