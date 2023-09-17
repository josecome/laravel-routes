<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function Page(Request $req, int $id = null, string $slug = null) {
        $page = $slug;
        return view('welcome', ['page' => $page]);
    }
}
