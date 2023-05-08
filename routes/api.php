<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/api/login', function (Request $request) {
    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
        $user = Auth::sales();
        $token = $sales->createToken('login_system')->plainTextToken;
        return response()->json(['token' => $token]);
    } else {
        return response()->json(['error' => 'Invalid credentials'], 401);
    }






    








});
