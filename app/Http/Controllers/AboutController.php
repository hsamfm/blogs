<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;

class AboutController extends Controller
{
    public function about()
    {
        $version = $this->__getVersion();

        $cache = Cache::add('version', $version);

        Cache::get('version');
        return view('about', compact('version'));
    }


    private function __getVersion()
    {
        return 0.1;
    }

}
