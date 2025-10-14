<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Product;
use App\Models\Solution;
use Illuminate\View\View;

class PageController extends Controller
{
    public function contacts(): View
    {
        return view('contact');
    }

    public function products(): View
    {
        return view('product');
    }

    public function solutions(): View
    {
        return view('solution');
    }
}
