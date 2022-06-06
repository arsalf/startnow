<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    //
    public function create($id)
    {
        $kategori = Kategori::all();
        
        return view("add_product", ['startup_id'=>$id, 'kategoris' => $kategori]);
    }

    public function edit($startup_id, $product_id, Request $request)
    {
        $product = ProductDetail::find($product_id);
        $kategori = Kategori::all();

        return view("edit_product", ["startup_id"=>$startup_id, "product"=>$product, 'kategoris' => $kategori]);
    }

    public function update($startup_id, $product_id, Request $request)
    {        
        $filenames = array();            
        $proposalnames = array();
                  
        $product = Product::find($product_id);           
        $pdetails = ProductDetail::find($product_id);

        $product->title = $request->title;
        $product->kategori = $request->kategori;
        $product->deskripsi = $request->deskripsi;        
        if($request->hasfile('images'))
        {
            foreach ($request->file('images') as $file) 
            {
                $filename = date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('image/products'), $filename); 
                array_push($filenames, $filename);                
            }  
            $product->push('images', $filenames);                          
            $pdetails->push('images', $filenames);
        }              
        $product->save();
                
        $pdetails->title = $request->title;
        $pdetails->kategori = $request->kategori;      
        $pdetails->deskripsi = $request->deskripsi;          
        if($request->hasfile('proposal'))
        {
            foreach ($request->file('proposal') as $file) 
            {
                $filename = date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('file/proposal'), $filename);      
                array_push($proposalnames, $filename);                
            }                            
            $pdetails->push('proposal_files', $proposalnames); 
        }  
        $pdetails->modal = $request->modal;
        $pdetails->save();

        return redirect()->back();
    }

    public function addLike($id, $p_id, Request $request)
    {
        $product = Product::find($p_id);
        $product->push('likers', Auth::user()->username);        
        
        return  http_response_code(200);
    }

    public function removeLike($id, $p_id, Request $request)
    {
        $product = Product::find($p_id);
        $product->pull('likers', Auth::user()->username);        
        
        return  http_response_code(200);
    }

    public function store($id, Request $request)
    {

        $filenames = array();
        if($request->hasfile('images'))
        {
            foreach ($request->file('images') as $file) 
            {
                $filename = date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('image/products'), $filename); 
                array_push($filenames, $filename);                
            }                            
        }                  

        $proposalnames = array();
        // $files = $request->proposal;  
        if($request->hasfile('proposal'))
        {
            foreach ($request->file('proposal') as $file) 
            {
                $filename = date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('file/proposal'), $filename);      
                array_push($proposalnames, $filename);                
            }                            
        }   
                  
        $product = Product::create([
            'startup_id' => $id,
            'title' => $request->title,
            'kategori' => $request->kategori,
            'images' => $filenames,
        ]);   
        
        $pdetails = new ProductDetail();
        $pdetails->startup_id = $id;
        $pdetails->product_id = $product->id;
        $pdetails->title = $request->title;
        $pdetails->deskripsi = $request->deskripsi;
        $pdetails->kategori = $request->kategori;
        $pdetails->images = $filenames;        
        $pdetails->proposal_files = $proposalnames;
        $pdetails->modal = $request->modal;
        $pdetails->save();

        return redirect()->back();
    }

}
