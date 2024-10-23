<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class postController extends Controller
{
    public function index(){
        return view('/home');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name'  => 'required|string|max255',
            'stock' => 'required|integer',
            'price' => 'required|numeric',
        ]);
    }
}
