<?php

namespace App\Http\Controllers;

use App\Models\Rate;
use Illuminate\Http\Request;

class RateController extends Controller
{
    public function store(Request $request)
    {
        Rate::updateOrCreate(
            ['user_id' => auth()->id(), 'product_id' => $request->input('product_id')],
            $request->validate(['rating' => 'required|integer']) + $request->only('comment')
        );

        return back();
    }
}