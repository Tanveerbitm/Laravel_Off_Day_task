<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //

    public function  index(){

        return view('pages.home',['products'=>Product::allData()]);
    }
    public function detail($id){
        return view('pages.detail',['details'=>Product::findDetail($id)]);
    }
}
