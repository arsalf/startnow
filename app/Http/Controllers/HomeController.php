<?php

namespace App\Http\Controllers;

use App\Models\ProductDetail;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function show($id)
    {
        $product = ProductDetail::find($id);        
        return view('details_product', ['product' => $product]);
    }

}
