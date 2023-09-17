<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function Page1(Request $req, string $slug = null) {
        $page = $slug;
        return view('welcome', ['page' => $page]);
    }
    function Page2(Request $req, int $id = 0, string $slug = null) {
        $page = $id . ', ' .$slug;
        return view('welcome', ['page' => $page]);
    }
    function Page3(Request $req, string $id = null) {
        $page = $id;
        return view('welcome', ['page' => $page]);
    }
}
