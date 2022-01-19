<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;

class AboutController extends BaseController
{
    public function about(): View
    {
        return view('blog.about');
    }
}