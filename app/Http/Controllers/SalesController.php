<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SalesController extends Controller
{
    public function index()
    {
        
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
    }

    public function show()
    {
        
    }

    public function edit()
    {
        
    }

    public function update()
    {

    }

    public function destroy($id)
    {

    }

}




class SalesController extends Controller
{
    public function index()
    {
        $sales = Sale::all();

        return response()->json($sales);
    }

    public function store(Request $request)
    {
        $sale = new Sale;

        $sale->seller_name = $request->input('seller_name');
        $sale->customer_name = $request->input('customer_name');
        $sale->product_name = $request->input('product_name');
        $sale->price = $request->input('price');
        $sale->purchase_date = $request->input('purchase_date');

        $sale->save();

        return response()->json($sale, 201);
    }

    public function show($id)
    {
        $sale = Sale::find($id);

        if (!$sale) {
            return response()->json(['error' => 'Sale not found'], 404);
        }

        return response()->json($sale);
    }

    public function update(Request $request, $id)
    {
        $sale = Sale::find($id);
    }

}
