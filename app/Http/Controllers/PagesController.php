<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\User;

class PagesController extends Controller
{
    
    public function index(){
        return view('layout.main');
    }
}
