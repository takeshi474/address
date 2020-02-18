<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class WelcomeController extends Controller
{
    public function index()
    {
      $tech = 'テスト';

      return view('welcometech', ['techtech' => $tech]);
    }
}
