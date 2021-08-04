<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class ProductController extends Controller
{
    function index()
    {
        //return "Welcome to Product page";
        //return product::all();

        $data=product::all();
        return view('product',['product'=>$data]);
    }
}
