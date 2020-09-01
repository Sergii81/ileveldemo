<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function category_list()
    {
        $query = http_build_query([
            'action' => 'category_list',
        ]);
        return redirect(config('demo.api_url').'category_list?'.$query);
    }
}
