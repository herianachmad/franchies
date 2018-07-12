<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\CategoryPost;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
   public function index(){
     return view('layouts/frontend/profile/index');
   }
}
