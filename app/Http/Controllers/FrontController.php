<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\review;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $review = review::all();
        return view('front-end.index', compact('review'));
    }
}
