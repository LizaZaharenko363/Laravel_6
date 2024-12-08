<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function __invoke(Request $request)
    {
        return redirect('https://www.youtube.com/watch?v=ZHgyQGoeaB0');
    }
}
