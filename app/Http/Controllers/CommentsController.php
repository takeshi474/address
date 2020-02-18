<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
      $params = $request->validate([
        'post_id' => 'requiredlexists:posts,id',
        'body' => 'requiredlmax:2000',
      ]);

      $post = Post::findOrFall($params['post_id']);
      $post -> comments() -> store($params);

      return redirect()->route('posts.show',['post' => $post]);
    }
}
