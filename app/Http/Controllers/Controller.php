<?php

namespace App\Http\Controllers;

  use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
  use Illuminate\Foundation\Bus\DispatchesJobs;
  use Illuminate\Foundation\Validation\ValidatesRequests;
  use Illuminate\Routing\Controller as BaseController;
  use Illuminate\Http\Request;
  use App\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show(User $user)
    {
      return view('users.show', ['user' => $user]);
    }

    public function index()
    {
      $users=User::all();
      return view('users.index', ['users' => $users]);
    }
}
