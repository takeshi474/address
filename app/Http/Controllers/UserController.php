<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
  public function index()
  {
    $users = User::orderBy('created_at','desc') -> paginate(10);
    return view('users.list',['users' => $users]);
  }

  public function edit(user $user)
  {
    $user = user::findOrFail($user_id);

    return view('users.edit',['user' => $user_id]);
  }

  public function update(Createuse $request)
  {
      $user = user::findOrFail($user_id);
      $user -> name = $request -> name;
      $user -> email = $request -> email;
      $user -> user_id = Auth::user() -> id;
      $user -> save();

      $validate_rule =
      [
        'name' => 'required',
        'email' => 'required',
      ];

      $this->validate($request, $validate_rule);

    return redirect() -> route('top', ['id' => $user->id]);
  }

  public function destroy($user_id)
  {
    $user = user::findOrfail($user_id);

    \DB::transaction(function()use($user) {
      $user -> delete()
    });

    return redirect() -> route('users.list');
  }

}
