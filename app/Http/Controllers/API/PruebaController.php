<?php


namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;

class PruebaController extends Controller
{
    public function index()
    {
        return response()->json(['success' => "Entras"], 200);
    }

}
