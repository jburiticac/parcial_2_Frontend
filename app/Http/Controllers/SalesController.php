<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SalesController extends Controller
{
   


 public function index()
 {
     $sales = Sales::all();
     return response()->json($sales);
 }

 public function store(Request $request)
 {
    $sales = new Sales;
    $sales->seller_name = $request->seller_name;
    $sales->customer_name = $request->customer_name;
    $sales->product_name = $request->product_name;
    $sales->price = $request->price;
    $sales->purchase_date = $request->purchase_date;
    $sales->save();
    return response()->json($sales);
 }

 public function show($id)
{
    $sales = Sales::find($id);
}
}