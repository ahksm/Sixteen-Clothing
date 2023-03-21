<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'body'=>'required',
        ]);

        $input = $request->all();
        $input['user_id'] = auth()->user()->id;

        Review::create($input);

        return back();
    }
    
    public function update(Request $request, Review $review)
    {
        return redirect()->back()->with('success', $review->update($request->validate(['body' => 'required|string'])));
    }

    public function destroy(Review $review)
    {
        $review->delete();

        return back();
    }
}
