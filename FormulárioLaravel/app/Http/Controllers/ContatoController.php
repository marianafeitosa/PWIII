<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function submit(Request $request)
    {
        $data = $request->all();
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
    }
}
