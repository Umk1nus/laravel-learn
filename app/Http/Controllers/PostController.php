<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function posts() {
        $posts = Post::where('in_published', 1)->get();
        foreach($posts as $post){
            dump($post->title);
        }
        dd('end');
    }

    public function create() {
        $postsArr = [
            [
                'title' => 'title new',
                'content' => 'content new',
                'image' => 'image.png',
                'likes' => 20,
                'in_published' => 1,
            ],
            [
                'title' => 'title new 2 ',
                'content' => 'content new 2',
                'image' => 'image2.png',
                'likes' => 201,
                'in_published' => 1,
            ],
            [
                'title' => 'title new 3',
                'content' => 'content new 3',
                'image' => 'image3.png',
                'likes' => 2,
                'in_published' => 1,
            ],
        ];

        foreach($postsArr as $item) {
            Post::create($item);
        }

        dd('created');
    }

    public function update() {
        $post = Post::find(6);
        $post->update([
            'title' => 'updated'
        ]);

        dd('update');
    }

    public function delete() {
        $post = Post::find(5);
        $post->delete();
        dd('delete');
    }
}
