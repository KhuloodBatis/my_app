<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KhuloodController extends Controller
{
  public function index()
  {
      
    return view('khulood');
  }

  public function show($id)
  {
    return 'My ID is :' . $id;
  }

  public function sum($id)
  {
    return 3 + $id;
  }
}
