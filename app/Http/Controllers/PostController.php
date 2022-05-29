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

    public function firstOrCreate() {
        $post = Post::find(1);
        $anotherPost = [
            'title' => 'title new 123',
            'content' => 'content new 123',
            'image' => 'image13.png',
            'likes' => 23,
            'in_published' => 1,
        ];
        
        Post::firstOrCreate(['title' => "title new 123"], $anotherPost);

        dd('finished');
    }

    public function updateOrCreate() {
        $anotherPost = [
            'title' => 'update title new 1333',
            'content' => 'update content new 121233',
            'image' => 'update image132.png',
            'likes' => 23,
            'in_published' => 1,
        ];

        Post::updateOrCreate(['title' => "title new 123"], $anotherPost);

        dd('finished');
    }
}
