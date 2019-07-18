<?php

namespace App\Http\Controllers\Site;

use Illuminate\Routing\Controller as BaseController;

class SitioController extends BaseController
{
    public function index()
    {
        return view('site.sitio');
    }

    public function english()
    {
        return view('site.english');
    }

}