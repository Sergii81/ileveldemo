<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function callback(Request $request)
    {
        var_dump($request->all()); exit;
    }

    public function redirect()
    {
        $query = http_build_query([
            'client_id' => config('demo.client_id'),
            'redirect_uri' => route('ileveldemo.callback'),
            'response_type' => 'code',
            'scope' => '',
        ]);

        return redirect(config('demo.authorize_url').$query);
    }
}
