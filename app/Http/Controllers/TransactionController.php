<?php

namespace App\Http\Controllers;

use App\Models\ProductDetail;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TransactionController extends Controller
{
    //

    public function add($product_id)
    {
        $product = ProductDetail::find($product_id);
        return view('create_investasi', ["product"=>$product]);
    }

    public function store($product_id, Request $request)
    {
     $transaction = Transaction::create([
         'token' => Str::random(8),
         'from_user' => Auth::user()->username,
         'to_product' => $product_id,
         'is_paid' => false,
         'dana' => $request->dana
     ]);
     
     return view("token_view", ["token"=>$transaction->token]);
    }


    public function simulasi()
    {
        return view("simulasi");
    }

    public function bayar(Request $request)
    {
        $transaction = Transaction::find($request->token);

        if(!is_null($transaction)){
            if($transaction->from_user == Auth::user()->username and $request->money >= $transaction->dana and !$transaction->is_paid)
            {                
                $transaction->is_paid = true;
                $transaction->save();
                
                $sisa_uang =  $request->money - $transaction->dana;

                return redirect()->back()->with("success", "transaction success, kembalian anda Rp. ".number_format($sisa_uang, 0, ',', '.'));
            }else{
                return abort(403, "failed transaction check your token and money!");
            }
        }else{
            return abort(404, "transaction not found");
        }

    }
}
