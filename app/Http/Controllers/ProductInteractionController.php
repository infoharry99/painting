<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductInteractionController extends Controller
{
    public function like($productId)
    {
        $user = Auth::user();

        $like = Like::where('user_id', $user->id)->where('product_id', $productId)->first();

        if ($like) {
            $like->delete();
            return back()->with('message', 'Like removed');
        }

        Like::create([
            'user_id' => $user->id,
            'product_id' => $productId,
        ]);

        return back()->with('message', 'Product liked');
    }

    public function comment(Request $request, $productId)
    {
        $request->validate([
            'comment' => 'required|string|max:500',
        ]);

        Comment::create([
            'user_id' => Auth::id(),
            'product_id' => $productId,
            'comment' => $request->comment,
        ]);

        return back()->with('message', 'Comment posted');
    }

    public function store(Request $request, $productId)
    {
        $request->validate([
            'comment' => 'required|string',
        ]);

        Comment::create([
            'product_id' => $productId,
            'user_id' => auth()->id(),
            'comment' => $request->comment,
            'parent_id' => $request->parent_id ?? null,
        ]);

        return back()->with('success', 'Comment posted successfully!');
    }
    public function commentPage($id)
    {
        $product = Product::with(['comments' => function($q){
            $q->whereNull('parent_id')->with('replies', 'user');
        }])->findOrFail($id);

        return view('frontend.pages.comment', compact('product'));
    }
}
