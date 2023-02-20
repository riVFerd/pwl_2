<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function show($id) {
        return "Halaman artikel dengan ID " . $id;
    }
}
