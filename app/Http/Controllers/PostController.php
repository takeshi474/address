<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePost;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
      $posts = Post::orderBy('created_at','desc') -> paginate(10);
      return view('posts.index',['posts' => $posts]);
    }

    public function ShowCreateForm()
    {
      return view('posts.create');
    }

    public function create(CreatePost $request)
    {
      // Postモデルのインスタンスを作成する
      $post = new Post();
      // 住所入力
      $post -> lastname = $request -> lastname;
      $post -> firstname = $request -> firstname;
      $post -> postal = $request -> postal;
      $post -> prefectures = $request -> prefectures;
      $post -> town = $request -> town;
      $post -> street = $request -> street;
      $post -> tel = $request -> tel;
      // 登録ユーザーからidを取得
      $post -> user_id = Auth::user() -> id;
      // インスタンスの状態をデータベースに書き込む
      $post -> save();
      // 「投稿する」をクリックしたら投稿一覧ページへリダイレクト
      return redirect() -> route('top',
      [
        'id' => $post -> id
      ]);
    }

    public function edit($post_id)
    {
      $post = Post::findOrFail($post_id);

      return view('posts.edit',['post' => $post]);
    }

    public function update($post_id, CreatePost $request)
    {
        $post = Post::findOrFail($post_id);

        $post -> lastname = $request -> lastname;
        $post -> firstname = $request -> firstname;
        $post -> postal = $request -> postal;
        $post -> prefectures = $request -> prefectures;
        $post -> town = $request -> town;
        $post -> street = $request -> street;
        $post -> tel = $request -> tel;
        $post -> user_id = Auth::user() -> id;
        $post -> save();

      return redirect() -> route('top',
      [
        'id' => $post -> id
      ]);
    }

    public function destroy($post_id)
    {
      $post = Post::findOrfail($post_id);

      \DB::transaction(function()use($post) {
        $post -> delete();
      });

      return redirect() -> route('top');
    }

}
