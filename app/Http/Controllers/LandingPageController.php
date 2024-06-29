<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $content = Content::all();
        return view('landing_page', ['content' => $content]);
    }
}
